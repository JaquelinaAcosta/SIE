<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Entity\Responsable;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Form\MesaEntradaType;
use Doctrine\ORM\Tools\Pagination\Paginator;

class MesaEntradaController extends Controller {

    
    /**
     * @Route("/mesaentrada/listado/{currentPage}", name="listado_mesaentrada")
     */
    public function listaMesaEntradaAction(Request $request, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();

        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $mesaentradas = array();

        $formMesaentradaFilter = $this->createForm(\AppBundle\Form\MesaEntradaFilterType::class);
        $formMesaentradaFilter->handleRequest($request);
        if ($formMesaentradaFilter->isSubmitted() == false && $this->get('session')->get('mesaentrada_listar_request')) {
            $formMesaentradaFilter->handleRequest($this->get('session')->get('mesaentrada_listar_request'));
        }

        if ($formMesaentradaFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:MesaEntrada')->createMesaentradaFilter();

            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formMesaentradaFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $mesaentradas = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        } else {
            $mesa_repo = $em->getRepository('AppBundle:MesaEntrada')->createMesaentradaFilter();
            $totalItems = count($mesa_repo->getQuery()->getResult());
            $mesa_repo->setFirstResult($limit * ($currentPage- 1));
            $mesa_repo->setMaxResults($limit);
            $paginator = new Paginator($mesa_repo, $fetchJoinCollection = true);
            $mesaentradas = $paginator->getQuery()->getResult();
            $maxPages = (count($mesaentradas) > 0) ? $maxPages = ceil($totalItems / $limit) : $maxPages = 1;
        }

        if ($formMesaentradaFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('mesaentrada_listar_request');
            return $this->redirectToRoute('listado_mesaentrada', ['currentPage' => 1]);
        }

        if ($formMesaentradaFilter->get('filter')->isClicked()) {
            $mesaentradaListarFilterRequest = $request->request->get('mesaentrada_filter');
            unset($mesaentradaListarFilterRequest['filter']);

            $request->request->set('mesaentrada_filter', $mesaentradaListarFilterRequest);
            $request->request->set('currentPage', 1);
            $this->get('session')->set('mesaentrada_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_mesaentrada', ['currentPage' => 1]);
            }
        }

        return $this->render('Ubicacion/listadoMesaEntrada.html.twig', array(
                    'limite' => $limit,
                    'mesaentradas' => $mesaentradas,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formMesaentradaFilter' => $formMesaentradaFilter->createView()
        ));
    }
    
    /**
     * @Route("/gestionar/mesa_entrada/{id}", name="gestionar_mesaentrada")
     */
    public function admGestionarAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $mesaentrada = $em->getRepository("AppBundle:Dependencia")->findByDependencia($id)->getMesaentrada();

        $original_responsables = new ArrayCollection();

        $form = $this->createForm(MesaEntradaType::class, $mesaentrada, ['gestion' => true,
            'dependencia_id' => $mesaentrada->getDependencia()->getId()]);

        foreach ($mesaentrada->getResponsables() as $responsable) {
            $original_responsables->add($responsable);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                foreach ($original_responsables as $responsable) {
                    if (false === $mesaentrada->getResponsables()->contains($responsable)) {
                        $em->remove($responsable);
                    }
                }
                foreach ($form['responsables']->getData() as $responsable) {
                     $responsable->getUsuario()->setRole('ROLE_RESPONSABLE');
                    $responsable->setUbicacion($mesaentrada);
                }

                $em->persist($mesaentrada);
                $flush = $em->flush();
                
                if(!$flush){
                    $this->addFlash('success', 'Mesa de Entrada editada correctamente.');
                }else{
                    $this->addFlash('danger', 'Mesa de Entrada editada correctamente.');
                }
                
            }
        }
        // replace this example code with whatever you need
        return $this->render('Ubicacion/mesaEntrada.html.twig', [
                    'form' => $form->createView(),
                    'dependencia' => $mesaentrada->getDependencia()
        ]);
    }

}
