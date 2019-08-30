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
use Doctrine\Common\Collections\ArrayCollection;

class ExpedienteAsociadoController extends Controller {

    /**
     * @Route("/expediente/{id}/add/expediente_asociado/{id_asoc}", name="nuevo_expediente_asociado")
     */
    public function nuevoAction(Request $request, $id, $id_asoc) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente_padre = $em->getRepository("AppBundle:Expediente")->find($id);

        if (!$this->get("app.util")->VerificarExpediente($expediente_padre, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        $expedienteAsociado = new ExpedienteAsociado();
        $expediente_asoc = $em->getRepository("AppBundle:Expediente")
                ->findOneBy(['id' => $id_asoc]);
        $expediente_asoc->setEstado('ASOCIADO');
        $expediente_asoc->setUbicacionActual($expediente_padre->getUbicacionActual());
        $expedienteAsociado->setExpedientePadre($expediente_padre);
        $expedienteAsociado->setExpedienteAsociado($expediente_asoc);
        $expedienteAsociado->setFecha(date("d-m-Y H:i:s"));
        $expedienteAsociado->setOrdenAsociacion('1');

        $expediente_padre->getExpedientesAsociados()->add($expedienteAsociado);

        $em->persist($expediente_padre);
        $flush = $em->flush();

        if ($flush == false) {
            $this->addFlash('success', 'Expediente ' . $expediente_asoc . ""
                    . " asociado correctamente a " . $expediente_padre);
        } else {
            $this->addFlash('danger', 'Ocurrió un error al intentar asociar el expediente');
        }

        // replace this example code with whatever you need
        return $this->redirectToRoute('listado_asociado', ['currentPage' => 1,
                    'id' => $expediente_padre->getId()]);
    }

    /**
     * @Route("/expediente/{id}/delete/expediente_asociado/{id_asoc}", name="remover_expediente_asociado")
     */
    public function deleteAction(Request $request, $id, $id_asoc) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository('AppBundle:Expediente')->find($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $expediente_asoc = $em->getRepository("AppBundle:ExpedienteAsociado")
                ->findOneBy(['expedienteAsociado' => $id_asoc]);

        $expediente_asoc->getExpedienteAsociado()->setEstado('NUEVO');
        $em->remove($expediente_asoc);
        $em->persist($expediente);
        $flush = $em->flush();

        if ($flush == false) {
            $this->addFlash('success', 'Expediente ' . ""
                    . " eliminado correctamente de " . $expediente);
        } else {
            $this->addFlash('danger', 'Ocurrió un error al intentar eliminar el expediente asociado');
        }

        // replace this example code with whatever you need
        return $this->redirectToRoute('listado_asociado', ['currentPage' => 1,
                    'id' => $expediente->getId()]);
    }

    /**
     * @Route("expediente/{id}/asociado/listado/{currentPage}", name="listado_asociado")
     */
    public function listaAsociadoAction(Request $request, $id, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();

        $expediente = $em->getRepository('AppBundle:Expediente')->find($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser(),true)) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }


        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $asociados = array();

        $formExpedienteAsociadoFilter = $this->createForm(ExpedienteAsociadoFilterType::class);
        $formExpedienteAsociadoFilter->handleRequest($request);
        if ($formExpedienteAsociadoFilter->isSubmitted() == false && $this->get('session')->get('asociado_listar_request')) {
            $formExpedienteAsociadoFilter->handleRequest($this->get('session')->get('asociado_listar_request'));
        }

        if ($formExpedienteAsociadoFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:ExpedienteAsociado')
                    ->createAsociadoFilterQuery($expediente);

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
            return $this->redirectToRoute('listado_asociado', ['id' => $expediente->getId(), 'currentPage' => 1]);
        }

        if ($formExpedienteAsociadoFilter->get('filter')->isClicked()) {
            $asociadoListarFilterRequest = $request->request->get('asociado_filter');
            unset($asociadoListarFilterRequest['filter']);

            $request->request->set('asociado_filter', $asociadoListarFilterRequest);
            $request->request->set('currentPage', 1);
            $this->get('session')->set('asociado_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_asociado', ['id' => $expediente->getId(), 'currentPage' => 1]);
            }
        }

        return $this->render('AppBundle:Expediente:listadoExpedienteAsociado.html.twig', array(
                    'asociados' => $asociados,
                    'expediente' => $expediente,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formExpedienteAsociadoFilter' => $formExpedienteAsociadoFilter->createView(),
                    'padre_id' => $id
        ));
    }

}
