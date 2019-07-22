<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Entity\Responsable;

use AppBundle\Form\MesaEntradaType;

class MesaEntradaController extends Controller
{
    /**
     * @Route("/mesaEntrada", name="mesaEntrada")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find(3);
        $testUser1 = $em->getRepository("AppBundle:Usuario")->find(3);
        $testUser2 = $em->getRepository("AppBundle:Usuario")->find(1);
        $mesaEntrada->setDependencia($dependencia);
         
        $mesaEntrada = new MesaEntrada();
        
       
        
        
       
              
        $form = $this->createForm(MesaEntradaType::class,$mesaEntrada);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $responsable1 = new Responsable();
            $responsable1->setUbicacion($mesaEntrada);
            $responsable1->setUsuario($testUser1);
            $mesaEntrada->getResponsables()->add($responsable1);
            
            $responsable2 = new Responsable();
            $responsable2->setUbicacion($mesaEntrada);
            $responsable2->setUsuario($testUser2);
            $mesaEntrada->getResponsables()->add($responsable2);
            
          //  $usuario = 
        
//            $em->persist($mesaEntrada);
//            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:mesaEntrada.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
