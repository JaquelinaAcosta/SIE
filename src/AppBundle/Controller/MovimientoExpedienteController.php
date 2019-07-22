<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\MovimientoExpediente;
use AppBundle\Entity\Expediente;

use AppBundle\Form\MovimientoExpedienteType;


class MovimientoExpedienteController extends Controller
{
    /**
     * @Route("/movimiento/expediente/{id}", name="moverExpediente")
     */
    public function indexAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = new Expediente();
        $expediente= $em->getRepository("AppBundle:Expediente")->find($id);
        //no se is la ubicacion hay que traerla o llevarla a la base de datos;                   
        $movimientoExpediente->setUsuario("admin");
        $movimientoExpediente->setExpediente($expediente);
        
        //$movimientoExpediente->setDependencia($dependencia);
        
        $form = $this->createForm(MovimientoExpedienteType::class,$movimientoExpediente);
               
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $em->persist($movimientoExpediente);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:movimiento.html.twig', [
            'form'=> $form->createView(),
            'expediente'=>$expediente
        ]);
    }
    
     /**
     * @Route("/ajax_movimiento", name="add_movimiento")
     */
    public function ajaxFormAction(Request $request)
    {     
        $expediente = new Expediente();
      
        
        $form = $this->createForm(MovimientoExpedienteType::class);
        $form->handleRequest($request);
        
        
        return $this->render('AppBundle:Expediente:movimiento.html.twig', [
            'form'=> $form->createView(),
            'expediente'=>$expediente
        ]);
    }
    
    
}
