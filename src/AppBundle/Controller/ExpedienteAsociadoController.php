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
    
     /**
     * @Route("expediente/{id}/asociado/listado", name="listado_asociado")
     */
    public function listaAsociadoAction(Request $request,$id) {

        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->getUser();
        $expediente = $em->getRepository('AppBundle:Expediente')->find($id);

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:listadoExpedienteAsociado.html.twig', [
                    'expediente' => $expediente
        ]);
    }
    
}
