<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Form\DependenciaType;
use AppBundle\Form\DependenciaFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Validator\Constraints\DateTime;

class DependenciaController extends Controller {

    /**
     * @Route("/dependencia/add", name="nueva_dependencia")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = new Dependencia();
        $mesaentrada = new MesaEntrada();

        $form = $this->createForm(DependenciaType::class, $dependencia);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $mesaentrada->setDependencia($dependencia);
                $mesaentrada->setCodigoExpediente('Sin codigo asignado');
                $dependencia->setMesaentrada($mesaentrada);
                $em->persist($mesaentrada);
                $flush = $em->flush();

                if ($flush == false) {
                    $this->addFlash('success', 'Dependencia creada correctamente.');
                } else {
                    $this->addFlash('danger', 'Ocurrió un error al intentar crear la dependencia.');
                }

                $this->redirectToRoute('listado_dependencia', ['currentPage' => 1]);
            }
        }
        // replace this example code with whatever you need
        return $this->render('Dependencia/add.html.twig', [
                    'form' => $form->createView(),
                    'accion' => 'Nueva'
        ]);
    }

    /**
     * @Route("dependencia/listado/{currentPage}", name="listado_dependencia")
     */
    public function listaDependenciasAction(Request $request, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();
        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $dependencias = array();

        $formDependenciaFilter = $this->createForm(DependenciaFilterType::class);
        $formDependenciaFilter->handleRequest($request);
        if ($formDependenciaFilter->isSubmitted() == false && $this->get('session')->get('dependencia_listar_request')) {
            $formDependenciaFilter->handleRequest($this->get('session')->get('dependencia_listar_request'));
        }

        if ($formDependenciaFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:Dependencia')->createDependenciaFilter();

            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formDependenciaFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $dependencias = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        } else {
            $dependencia_repo = $em->getRepository('AppBundle:Dependencia')->createDependenciaFilter();
            $totalItems = count($dependencia_repo->getQuery()->getResult());
            $dependencia_repo->setFirstResult($limit * ($currentPage - 1));
            $dependencia_repo->setMaxResults($limit);
            $paginator = new Paginator($dependencia_repo, $fetchJoinCollection = true);
            $dependencias = $paginator->getQuery()->getResult();
            $maxPages = (count($dependencias) > 0) ? $maxPages = ceil($totalItems / $limit) : $maxPages = 1;
        }

        if ($formDependenciaFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('dependencia_listar_request');
            return $this->redirectToRoute('listado_dependencia', ['currentPage' => 1]);
        }

        if ($formDependenciaFilter->get('filter')->isClicked()) {
            $dependenciaListarFilterRequest = $request->request->get('dependencia_filter');
            unset($dependenciaListarFilterRequest['filter']);

            $request->request->set('dependencia_filter', $dependenciaListarFilterRequest);
            $request->request->set('currentPage', 1);
            $this->get('session')->set('dependencia_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_dependencia', ['currentPage' => 1]);
            }
        }

        return $this->render('Dependencia/listadoDependencia.html.twig', array(
                    'limite' => $limit,
                    'dependencias' => $dependencias,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formDependenciaFilter' => $formDependenciaFilter->createView()
        ));
    }

    /**
     * @Route("dependencia/archivar/{id}", name="baja_dependencia")
     */
    public function archivarAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = $em->getRepository("AppBundle:Dependencia")->findByDependencia($id);

        $dependencia->setFechaBaja(new \DateTime('now'));

        $em->persist($dependencia);
        $flush = $em->flush();

        if (!$flush) {
            $this->addFlash('success', 'La dependencia se borró exitosamente.');
        } else {
            $this->addFlash('danger', 'La dependencia no se ha podido borrar porque ocurrió un error.');
        }

        return $this->redirectToRoute('listado_dependencia', ["currentPage" => 1]);
    }

    /**
     * @Route("dependencia/edit/{id}", name="editar_dependencia")
     */
    public function editPersonaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = $em->getRepository("AppBundle:Dependencia")->findByDependencia($id);

        $form = $this->createForm(DependenciaType::class, $dependencia, ['gestion' => 'Administrador']);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($dependencia);
                $flush = $em->flush();

                if (!$flush) {
                    $this->addFlash('success', 'La dependencia se modificó exitosamente.');
                } else {
                    $this->addFlash('danger', 'La dependencia no se ha podido borrar porque ocurrió un error.');
                }

                return $this->redirectToRoute('listado_dependencia', ["currentPage" => 1]);
            }
        }

        // replace this example code with whatever you need
        return $this->render('Dependencia/add.html.twig', array(
                    'form' => $form->createView(),
                    'accion' => 'Editar'
        ));
    }

}
