<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CaratulaAgregada;
use AppBundle\Form\CaratulaAgregadaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\CaratulaAgregadaFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\Validator\Constraints\DateTime;

class CaratulaAgregadaController extends Controller {

    /**
     * @Route("expediente/add/caratulaAgregada/{id}", name="nueva_caratula")
     */
    public function indexAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $caratulaAgregada = new CaratulaAgregada();

        $expediente = $em->getRepository("AppBundle:Expediente")->findByExpediente($id);

        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {

            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        $form = $this->createForm(CaratulaAgregadaType::class, $caratulaAgregada);

        $form->handleRequest($request);


        if ($form->isValid()) {
            $caratulaAgregada->setExpediente($expediente);
            $expediente->getCaratulas()->add($caratulaAgregada);
            $em->persist($expediente);
            $em->flush();

            return $this->redirectToRoute('ver_expediente', ['id' => $id]);
        }

        // replace this example code with whatever you need
        return $this->render('Expediente/caratulaAgregada.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'caratulaAgregada' => $caratulaAgregada,
                    'accion' => 'Agregar'
        ]);
    }

    /**
     * @Route("expediente/delete_caratula/{id}", name="eliminar_caratula")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $caratula = $em->getRepository("AppBundle:CaratulaAgregada")->findByCaratula($id);

        if (!$this->get("app.util")->VerificarExpediente($caratula->getExpediente(), $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        $caratula->setFechaBaja(new \DateTime('now'));
         $this->get('session')->remove('caratula_listar_request');          
        $flush = $em->flush();

        if ($flush == false) {
            $this->addFlash('success', 'Caratula eliminada correctamente.');
        } else {
            $this->addFlash('success', 'Hubo un problema al intentar borrar la caratula.');
        }


        return $this->redirectToRoute('listado_caratula', ['id' => $caratula->getExpediente()->getId(),
                    'currentPage' => 1]);
    }

    /**
     * @Route("expediente/edit_caratula/{id}", name="editar_caratula")
     */
    public function editCaratulaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $caratulaAgregada = $em->getRepository("AppBundle:CaratulaAgregada")->findByCaratula($id);

        if (!$this->get("app.util")->VerificarExpediente($caratulaAgregada->getExpediente(), $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        $expediente = $caratulaAgregada->getExpediente();
        $form = $this->createForm(CaratulaAgregadaType::class, $caratulaAgregada);
        $form->handleRequest($request);

        $user = $this->getUser();

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($caratulaAgregada);
                $flush = $em->flush();

                if ($flush == false) {
                    $this->addFlash('success', 'Caratula editada correctamente.');
                } else {
                    $this->addFlash('success', 'Hubo un problema al intentar editar la caratula.');
                }

                return $this->redirectToRoute('listado_caratula', ['id' => $caratula->getExpediente()->getId(),
                            'currentPage' => 1]);
            }
        }

        // replace this example code with whatever you need
        return $this->render('Expediente/caratulaAgregada.html.twig', array(
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'caratulaAgregada' => $caratulaAgregada,
                    'accion' => 'Editar'
        ));
    }

    /**
     * @Route("expediente/{id}/caratula/listado/{currentPage}", name="listado_caratula")
     */
    public function listaCaratulaAction(Request $request, $id, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();

        $expediente = $em->getRepository('AppBundle:Expediente')->findByExpediente($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser(), true)) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $caratulas = array();

        $formCaratulaAgregadaFilter = $this->createForm(CaratulaAgregadaFilterType::class);
        $formCaratulaAgregadaFilter->handleRequest($request);
        if ($formCaratulaAgregadaFilter->isSubmitted() == false && $this->get('session')->get('caratula_listar_request')) {
            $formCaratulaAgregadaFilter->handleRequest($this->get('session')->get('caratula_listar_request'));
        }

        if ($formCaratulaAgregadaFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:CaratulaAgregada')
                    ->createCaratulaFilterQuery($expediente);

            $this->get('lexik_form_filter.query_builder_updater')
                    ->addFilterConditions($formCaratulaAgregadaFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $caratulas = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        } else {
            $caratulas_repo = $em->getRepository('AppBundle:CaratulaAgregada')
                    ->createCaratulaFilterQuery($expediente);
            $totalItems = count($caratulas_repo->getQuery()->getResult());
            $caratulas_repo->setFirstResult($limit * (1 - 1));
            $caratulas_repo->setMaxResults($limit);
            $paginator = new Paginator($caratulas_repo, $fetchJoinCollection = true);
            $caratulas = $paginator->getQuery()->getResult();
            $maxPages = (count($caratulas) > 0) ? $maxPages = ceil($totalItems / $limit) : $maxPages = 1;
        }

        if ($formCaratulaAgregadaFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('caratula_listar_request');
            return $this->redirectToRoute('listado_caratula', ['id' => $expediente->getId(), 'currentPage' => 1]);
        }

        if ($formCaratulaAgregadaFilter->get('filter')->isClicked()) {
            $caratulaListarFilterRequest = $request->request->get('caratula_filter');
            unset($caratulaListarFilterRequest['filter']);

            $request->request->set('caratula_filter', $caratulaListarFilterRequest);
            $request->request->set('currentPage', 1);
            $this->get('session')->set('caratula_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_caratula', ['id' => $expediente->getId(), 'currentPage' => 1]);
            }
        }

        return $this->render('Expediente/listadoCaratulas.html.twig', array(
                    'limite' => $limit,
                    'caratulas' => $caratulas,
                    'expediente' => $expediente,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'caratula' => $id,
                    'formCaratulaAgregadaFilter' => $formCaratulaAgregadaFilter->createView()
        ));
    }

    /**
     * @Route("expediente/ver_caratula/{id}", name="ver_caratula")
     */
    public function detalleCaratulaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $caratulaAgregada = $em->getRepository("AppBundle:CaratulaAgregada")->findByCaratula($id);

        if (!$this->get("app.util")->VerificarExpediente($caratulaAgregada->getExpediente(), $this->getUser(), true)) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
//        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        // replace this example code with whatever you need
        return $this->render('Expediente/detalleCaratulaAgregada.html.twig', [
                    'caratula' => $caratulaAgregada
        ]);
    }

}
