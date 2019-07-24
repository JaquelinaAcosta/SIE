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

class ExpedienteAsociadoController extends Controller
{
    /**
     * @Route("/add/expediente_asociado/{id}", name="expedienteAsociado")
     */
    public function indexAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find(3);
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
              
        
        $expedienteAsociado = new ExpedienteAsociado();
      
        //$expedienteAsociado->setDependencia($dependencia);
        $form = $this->createForm(ExpedienteType::class,$expediente);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            
            
//            $em->persist($expediente);
//            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:expedienteAsociado.html.twig', [
            'form'=> $form->createView(),
            'expediente'=>$expediente
        ]);
    }
}
