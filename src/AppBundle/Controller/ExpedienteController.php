<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Persona;
use AppBundle\Entity\Tema;
use AppBundle\Form\ExpedienteType;
use \AppBundle\Entity\MesaEntrada;
use AppBundle\Entity\ExpedienteAsociado;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Form\ExpedienteFilterType;

class ExpedienteController extends Controller {

    /**
     * @Route("/add/expediente", name="nuevo_expediente")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = new Expediente();
        $expedienteAsociado = new ExpedienteAsociado();

        $form = $this->createForm(ExpedienteType::class, $expediente);

        $form->handleRequest($request);

        $user = $this->getUser();
        $expediente->setIniciadorDependencia($user->getPersona()->getDependencia());
        $expediente->setUbicacionActual($expediente->getIniciadorDependencia()->getMesaentrada());


        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                foreach ($form['expedientes_asociados']->getData() as $expediente_asoc) {
                    $expediente_asoc->setExpedientePadre($expediente);
                }

//                $expediente->setFechaInicio(date($form['fechaInicio']->getData()." H:i:s"));
//                $expediente->setFechaFin(date($form['fechaFin']->getData()." H:i:s"));
                $em->persist($expediente);
                $em->flush();
            }

            return $this->redirectToRoute('listado_expediente',['currentPage'=>1]);
        }


        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:add.html.twig', [
                    'form' => $form->createView(),
                    'accion' => 'Nuevo'
        ]);
    }

//    /**
//     * @Route("expediente/listado", name="listado_expediente")
//     */
//    public function listaExpedientesAction(Request $request) {
//
//        $em = $this->getDoctrine()->getEntityManager();
//        $user = $this->getUser();
//        $expediente = new Expediente();
//
//        if ($user->getRole() == "ROLE_ADMIN") {
//            $expediente = $em->getRepository("AppBundle:Expediente")->findAll();
//        } else {
//            $expediente = $em->getRepository("AppBundle:Expediente")->findBy([
//                'iniciadorDependencia' => $user->getPersona()->getDependencia()
//            ]);
//        }
//
//
//        // replace this example code with whatever you need
//        return $this->render('AppBundle:Expediente:listadoExpediente.html.twig', [
//                    'expediente' => $expediente
//        ]);
//    }

    /**
     * @Route("expediente/listado/{currentPage}", name="listado_expediente")
     */
    public function listaExpedientesAction(Request $request, $currentPage) {

        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->getUser();
        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $expedientes = array();

        $formExpedienteFilter = $this->createForm(ExpedienteFilterType::class);
        $formExpedienteFilter->handleRequest($request);
        if ($formExpedienteFilter->isSubmitted() == false && $this->get('session')->get('expediente_listar_request')) {
            $formExpedienteFilter->handleRequest($this->get('session')->get('expediente_listar_request'));
        }

        if ($formExpedienteFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:Expediente')->createQueryBuilder('e');
            if ($user->getRole() != "ROLE_ADMIN") {
                $filterBuilder->leftJoin(\AppBundle\Entity\Ubicacion::class, "u", "WITH",
                                        "e.ubicacionActual = u.id")
                                ->where('u.dependencia= :dependencia')
//                                ->andWhere('w.id != :expediente_id')
                                ->setParameter('dependencia', $user->getPersona()->getDependencia());
            }
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formExpedienteFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $expedientes = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        }

        if ($formExpedienteFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('expediente_listar_request');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        if ($formExpedienteFilter->get('filter')->isClicked()) {
            $expedienteListarFilterRequest = $request->request->get('expediente_filter');
            unset($expedienteListarFilterRequest['filter']);
            $request->request->set('expediente_filter', $expedienteListarFilterRequest);
            $this->get('session')->set('expediente_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
            }
        }

        return $this->render('AppBundle:Expediente:listadoExpediente.html.twig', array(
                    'expediente' => $expedientes,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formExpedienteFilter' => $formExpedienteFilter->createView()
        ));
    }

    /**
     * @Route("expediente/view/{id}", name="ver_expediente")
     */
    public function expedienteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        $AsociadoCount = $em->getRepository('AppBundle:ExpedienteAsociado')->findBy([
            'expedienteAsociado' => $expediente->getId()]);

        if (count($AsociadoCount) == 0) {
            $asociado = false;
        } else {
            $asociado = true;
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:detalleExpediente.html.twig', [
                    'expediente' => $expediente,
                    'asociado' => $asociado
        ]);
    }

    /**
     * @Route("expediente/delete/{id}", name="eliminar_expediente")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        // replace this example code with whatever you need
        if (!$expediente) {
            throw $this->createNotFoundException('No element found for id ' . $id);
        }

        $em->remove($expediente);
        $flush = $em->flush();

//        if ($flush == null) {
//            echo "Post se ha borrado correctamente";
//        } else {
//            echo "El post no se ha borrado";
//        }

        return $this->redirectToRoute('listado_expediente');
    }

    /**
     * @Route("expediente/edit/{id}", name="editar_expediente")
     */
    public function editAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $form = $this->createForm(ExpedienteType::class, $expediente);

        $user = $this->getUser();     

//        $original_expedientes_asociados = new ArrayCollection();
//
//        foreach ($expediente->getExpedientesAsociados() as $expediente_asoc) {
//            $original_expedientes_asociados->add($expediente_asoc);
//        }


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

//                foreach ($original_expedientes_asociados as $expediente_asoc) {
//                    if (false === $expediente->getExpedientesAsociados()->contains($expediente_asoc)) {
//                        // remove the Task from the Tag
//                        $expediente->getExpedientesAsociados()->removeElement($expediente_asoc);
//                        // if it was a many-to-one relationship, remove the relationship like this
//                        // $tag->setTask(null);
//                        // if you wanted to delete the Tag entirely, you can also do that
//                        // $entityManager->remove($tag);
//
//                        $em->remove($expediente_asoc);
//                    }
//                }
//
//                foreach ($form['expedientes_asociados']->getData() as $expediente_asoc) {
//                    $expediente_asoc->setExpedientePadre($expediente);
//                }
//                $expediente->setFechaInicio(date($form['fechaInicio']->getData()." H:i:s"));
//                $expediente->setFechaFin(date($form['fechaFin']->getData()." H:i:s"));
                $em->persist($expediente);
                $em->flush();
            }
            return $this->redirectToRoute('listado_expediente',['currentPage'=>1]);
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:add.html.twig', array(
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'accion' => 'Editar'
        ));
    }

}
