<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\MovimientoExpediente;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Ubicacion;
use AppBundle\Form\MovimientoExpedienteType;

class MovimientoExpedienteController extends Controller {

    /**
     * @Route("expediente/{id}/add/movimiento", name="nuevo_movimiento")
     */
    public function indexAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $ubicacionActual = null;
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        
        $form = $this->createForm(MovimientoExpedienteType::class, $movimientoExpediente);
        $form->handleRequest($request);
       
        
        if ($form->isSubmitted()) {
            $ubicacion_index = $form['ubicacion']->getData();
            $movimientoExpediente->setUsuario($this->getUser()->getIup());
             
            if($ubicacion_index == 1){
                 $mesaentrada = $em->getRepository("AppBundle:Dependencia")->find($form['mesaentrada']->getData()->getDependencia()->getId())->getMesaentrada();
                 $ubicacionActual = $mesaentrada;
                 $movimientoExpediente->setTipoSalida('Externo');
            }
            if($ubicacion_index == 2){
                $persona = $em->getRepository("AppBundle:Persona")->find($form['persona']['nombre']->getData()->getId());
                $ubicacionActual = $persona;
                $movimientoExpediente->setTipoSalida('Interno');
            }   
            if($ubicacion_index == 3){
                $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->find($form['lugarfisico']['tipo']->getData()->getId());
                $ubicacionActual = $lugarfisico;
                $movimientoExpediente->setTipoSalida('Archivado');
            }               
            
            $movimientoExpediente->setExpediente($expediente);
            $movimientoExpediente->setFecha(date("d-m-Y H:i:s"));       
            $movimientoExpediente->setUbicacion($ubicacionActual);

            
            $expediente->getMovimientos()->add($movimientoExpediente);            
            $expediente->setUbicacionActual($ubicacionActual);
            
            $em->persist($expediente);
            $em->flush();
            
           return $this->redirectToRoute('ver_expediente',['id'=>$id]);
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:movimiento.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }
      
    /**
     * @Route("/ajax_movimiento", name="add_movimiento")
     */
    public function ajaxFormAction(Request $request) {
        $expediente = new Expediente();

        $form = $this->createForm(MovimientoExpedienteType::class);
        $form->handleRequest($request);        
        
        return $this->render('AppBundle:Expediente:movimiento.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }

}
