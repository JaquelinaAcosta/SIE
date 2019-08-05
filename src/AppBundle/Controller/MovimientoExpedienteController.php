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
//
//    /**
//     * @Route("expediente/{id}/add/movimiento", name="nuevo_movimiento")
//     */
//    public function indexAction(Request $request, $id) {
//        $em = $this->getDoctrine()->getEntityManager();
//        $movimientoExpediente = new MovimientoExpediente();
//        $ubicacionActual = null;
//        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
//        
//        $form = $this->createForm(MovimientoExpedienteType::class, $movimientoExpediente);
//        $form->handleRequest($request);
//        
//        if ($form->isSubmitted()) {
//            $ubicacion_index = $form['ubicacion']->getData();
//            $movimientoExpediente->setUsuario($this->getUser()->getIup());
//             
//            if($ubicacion_index == 1){
//                 $mesaentrada = $em->getRepository("AppBundle:Dependencia")->find($form['mesaentrada']->getData()->getDependencia()->getId())->getMesaentrada();
//                 $ubicacionActual = $mesaentrada;
//                 $movimientoExpediente->setTipoSalida('Externa');
//            }
//            if($ubicacion_index == 2){
//                $persona = $em->getRepository("AppBundle:Persona")->find($form['persona']['nombre']->getData()->getId());
//                $ubicacionActual = $persona;
//                $movimientoExpediente->setTipoSalida('Interna');
//            }   
//            if($ubicacion_index == 3){
//                $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->find($form['lugarfisico']['tipo']->getData()->getId());
//                $ubicacionActual = $lugarfisico;
//                $movimientoExpediente->setTipoSalida('Archivador');
//            }               
//            
//            $movimientoExpediente->setExpediente($expediente);
//            $movimientoExpediente->setFecha(date("d-m-Y H:i:s"));       
//            $movimientoExpediente->setUbicacion($ubicacionActual);
//
//            
//            $expediente->getMovimientos()->add($movimientoExpediente);            
//            $expediente->setUbicacionActual($ubicacionActual);
//            
//            $em->persist($expediente);
//            $em->flush();
//            
//           return $this->redirectToRoute('ver_expediente',['id'=>$id]);
//        }
//
//        // replace this example code with whatever you need
//        return $this->render('AppBundle:Expediente:movimiento.html.twig', [
//                    'form' => $form->createView(),
//                    'expediente' => $expediente
//        ]);
//    }
//      
//    /**
//     * @Route("/ajax_movimiento", name="add_movimiento")
//     */
//    public function ajaxFormAction(Request $request) {
//        $expediente = new Expediente();
//
//        $form = $this->createForm(MovimientoExpedienteType::class);
//        $form->handleRequest($request);        
//        
//        return $this->render('AppBundle:Expediente:movimiento.html.twig', [
//                    'form' => $form->createView(),
//                    'expediente' => $expediente
//        ]);
//    }
    
    
    /**
     * @Route("/expediente/{id}/add/movimiento", name="elegir_movimiento")
     */
    public function indexMovimientoAction(Request $request,$id) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        
        $form = $this->createForm(MovimientoExpedienteType::class);
        $form->handleRequest($request);        
        
        return $this->render('AppBundle:Movimiento:chooser.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }
    
    /**
<<<<<<< HEAD
     * @Route("/expediente/{id}/add/movimiento", name="elegir_movimiento")
     */
    public function indexMovimientoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $form = $this->createForm(MovimientoExpedienteType::class);
        $form->handleRequest($request);

        return $this->render('AppBundle:Movimiento:chooser.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }

    /**
     * @Route("/expediente/{id}/add/movimiento/interno", name="movimiento_interno")
     */
    public function internoAction(Request $request, $id) {
=======
     * @Route("/expediente/{id}/add/movimiento/interno", name="movimiento_interno")
     */
    public function internoAction(Request $request,$id) {
>>>>>>> abf331d7d4d966baf9877772d22a31de37a9380b
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $form = $this->createForm(MovimientoExpedienteType::class, $movimientoExpediente, ['pase' => 'interno']);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $persona = $em->getRepository("AppBundle:Persona")->find($form['persona']['nombre']->getData()->getId());
                $movimientoExpediente->setTipoSalida('Interno');
                $movimientoExpediente->setExpediente($expediente);
                $movimientoExpediente->setFecha(date("d-m-Y H:i:s"));
                $movimientoExpediente->setUbicacion($persona);
                $expediente->getMovimientos()->add($movimientoExpediente);
                $expediente->setUbicacionActual($persona);
                $em->persist($expediente);
                $em->flush();
            }
        }
        return $this->render('AppBundle:Movimiento:interno.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }

<<<<<<< HEAD
    /**
     * @Route("/expediente/{id}/add/movimiento/externo", name="movimiento_externo")
     */
    public function externoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        $user = $this->getUser();

        if(get_class($expediente->getUbicacionActual()) == \AppBundle\Entity\MesaEntrada::class){
               $form = $this->createForm(MovimientoExpedienteType::class,
                $movimientoExpediente, ['pase' => 'externo']);
        }else{
             $form = $this->createForm(MovimientoExpedienteType::class,
                $movimientoExpediente, ['pase' => 'externo',
                                        'dependencia_id'=>$user->getPersona()->getDependencia()->getId()]);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $mesaentrada = $em->getRepository("AppBundle:Dependencia")
                                ->find($form['mesaentrada']
                                        ->getData()->getDependencia()
                                        ->getId())->getMesaentrada();
                $movimientoExpediente->setTipoSalida('Externo');
                $movimientoExpediente->setExpediente($expediente);
                $movimientoExpediente->setFecha(date("d-m-Y H:i:s"));
                $movimientoExpediente->setUbicacion($mesaentrada);
                $expediente->getMovimientos()->add($movimientoExpediente);
                $expediente->setUbicacionActual($mesaentrada);
                $em->persist($expediente);
                $em->flush();
            }
        }
        return $this->render('AppBundle:Movimiento:externo.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }
    
    /**
     * @Route("/expediente/{id}/add/movimiento/archivado", name="movimiento_archivado")
     */
    public function archivadoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $form = $this->createForm(MovimientoExpedienteType::class,
                $movimientoExpediente, ['pase' => 'archivar']);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->find($form['lugarfisico']['tipo']->getData()->getId());
                $movimientoExpediente->setTipoSalida('Archivado');
                $movimientoExpediente->setExpediente($expediente);
                $movimientoExpediente->setFecha(date("d-m-Y H:i:s"));
                $movimientoExpediente->setUbicacion($lugarfisico);
                $expediente->getMovimientos()->add($movimientoExpediente);
                $expediente->setUbicacionActual($lugarfisico);
                $em->persist($expediente);
                $em->flush();
            }
        }
        return $this->render('AppBundle:Movimiento:archivar.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
=======
            
            $expediente->getMovimientos()->add($movimientoExpediente);            
            $expediente->setUbicacionActual($ubicacionActual);
            
            $em->persist($expediente);
            $em->flush();
            
           return $this->redirectToRoute('ver_expediente',['id'=>$id]);
>>>>>>> abf331d7d4d966baf9877772d22a31de37a9380b
    }
    
}
