<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CaratulaAgregada;
use AppBundle\Form\CaratulaAgregadaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Form\CaratulaAgregadaFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;

class CaratulaAgregadaController extends Controller {

    /**
     * @Route("expediente/add/caratulaAgregada/{id}", name="nueva_caratula")
     */
    public function indexAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $caratulaAgregada = new CaratulaAgregada();

        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $form = $this->createForm(CaratulaAgregadaType::class, $caratulaAgregada);

        $form->handleRequest($request);


        if ($form->isValid()) {
            $caratulaAgregada->setExpediente($expediente);
            $em->persist($caratulaAgregada);
            $em->flush();
            return $this->redirectToRoute('ver_expediente', ['id' => $id]);
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:caratulaAgregada.html.twig', [
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
        $caratula = $em->getRepository("AppBundle:CaratulaAgregada")->find($id);


        // replace this example code with whatever you need
        if (!$caratula) {
            throw $this->createNotFoundException('No element found for id ' . $id);
        }

        $em->remove($caratula);
        $flush = $em->flush();

        return $this->redirectToRoute('ver_expediente', ['id' => $caratula->getExpediente()->getId()]);
    }

    /**
     * @Route("expediente/edit_caratula/{id}", name="editar_caratula")
     */
    public function editCaratulaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $caratulaAgregada = $em->getRepository("AppBundle:CaratulaAgregada")->find($id);
        $expediente = $caratulaAgregada->getExpediente();
        $form = $this->createForm(CaratulaAgregadaType::class, $caratulaAgregada);
        $form->handleRequest($request);

        $user = $this->getUser();

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($caratulaAgregada);
                $em->flush();
            }
            return $this->redirectToRoute('ver_expediente', ['id' => $expediente->getId()]);
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:caratulaAgregada.html.twig', array(
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'caratulaAgregada' => $caratulaAgregada,
                    'accion' => 'Editar'
        ));
    }

//     /**
//     * @Route("expediente/{id}/caratula/listado", name="listado_caratula")
//     */
//    public function listaMovimientoAction(Request $request,$id) {
//
//        $em = $this->getDoctrine()->getEntityManager();
//        $user = $this->getUser();
//        $expediente = $em->getRepository('AppBundle:Expediente')->find($id);
//
//        // replace this example code with whatever you need
//        return $this->render('AppBundle:Expediente:listadoCaratulas.html.twig', [
//                    'expediente' => $expediente
//        ]);
//    }

    /**
     * @Route("expediente/{id}/caratula/listado/{currentPage}", name="listado_caratula")
     */
    public function listaCaratulaAction(Request $request, $id, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();

        $expediente = $em->getRepository('AppBundle:Expediente')->find($id);
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

        return $this->render('AppBundle:Expediente:listadoCaratulas.html.twig', array(
                    'caratulas' => $caratulas,
                    'expediente' => $expediente,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formCaratulaAgregadaFilter' => $formCaratulaAgregadaFilter->createView()
        ));
    }

}
