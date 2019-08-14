<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\ExpedienteAsociado;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\Expediente;
use AppBundle\Form\ExpedienteAsociadoType;
use AppBundle\Form\ExpedienteType;
use AppBundle\Form\ExpedienteAsociadoFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;

class ExpedienteAsociadoController extends Controller {

    /**
     * @Route("/expediente/{id}/add/expediente_asociado/", name="nuevo_expediente_asociado")
     */
    public function nuevoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        $expedienteAsociado = new ExpedienteAsociado();
        $form = $this->createForm(ExpedienteAsociadoType::class, $expedienteAsociado,['expediente_id'=>$expediente->getId()]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $expedienteAsociado->setExpedientePadre($expediente);
            $expedienteAsociado->setFecha(date("d-m-Y H:i:s"));
            $expediente->getExpedientesAsociados()->add($expedienteAsociado);
            $em->persist($expediente);
            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:expedienteAsociado.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }
    
//     /**
//     * @Route("expediente/{id}/asociado/listado", name="listado_asociado")
//     */
//    public function listaAsociadoAction(Request $request,$id) {
//
//        $em = $this->getDoctrine()->getEntityManager();
//        $user = $this->getUser();
//        $expediente = $em->getRepository('AppBundle:Expediente')->find($id);
//
//        // replace this example code with whatever you need
//        return $this->render('AppBundle:Expediente:listadoExpedienteAsociado.html.twig', [
//                    'expediente' => $expediente
//        ]);
//    }
//    
    
    /**
     * @Route("expediente/{id}/asociado/listado/{currentPage}", name="listado_asociado")
     */
    public function listaAsociadoAction(Request $request, $id, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();

        $expediente=$em->getRepository('AppBundle:Expediente')->find($id);
        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $asociados = array();

        $formExpedienteAsociadoFilter = $this->createForm(ExpedienteAsociadoFilterType::class);
        $formExpedienteAsociadoFilter->handleRequest($request);
        if ($formExpedienteAsociadoFilter->isSubmitted() == false && $this->get('session')->get('asociado_listar_request')) {
            $formExpedienteAsociadoFilter->handleRequest($this->get('session')->get('asociado_listar_request'));
        }

        if  ($formExpedienteAsociadoFilter->isValid()) {
//            $filterBuilder = $em->getRepository('AppBundle:ExpedienteAsociado')->createQueryBuilder('ea');
            $filterBuilder = $em->getRepository('AppBundle:ExpedienteAsociado')
                    ->createAsociadoFilterQuery($expediente);
            
            
//            $filterBuilder->innerJoin(\AppBundle\Entity\Expediente::class, "e", "WITH",
//                                "ea.expedienteAsociado=e.id")
//                        ->where('ea.expedienteAsociado = :expediente')
////                                ->andWhere('w.id != :expediente_id')
//                        ->setParameter('expedienteAsociado', $expediente);
            
//            $filterBuilder->addOrderBy('p.tema', 'ASC');
//            $filterBuilder->addOrderBy('p.concepto', 'ASC');

            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formExpedienteAsociadoFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $asociados = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
            
           
        }

        if ($formExpedienteAsociadoFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('asociado_listar_request');
            return $this->redirectToRoute('listado_asociado',['id'=>$expediente->getId(),'currentPage' => 1]);
        }

        if ($formExpedienteAsociadoFilter->get('filter')->isClicked()) {
            $asociadoListarFilterRequest = $request->request->get('asociado_filter');
            unset($asociadoListarFilterRequest['filter']);

            $request->request->set('asociado_filter', $asociadoListarFilterRequest);
            $request->request->set('currentPage', 1);
            $this->get('session')->set('asociado_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_asociado', ['id'=>$expediente->getId(),'currentPage' => 1]);
            }
        }

        return $this->render('AppBundle:Expediente:listadoExpedienteAsociado.html.twig', array(
                    'asociados' => $asociados,
                    'expediente' => $expediente,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formExpedienteAsociadoFilter' => $formExpedienteAsociadoFilter->createView()
        ));
    }
}
