<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\CaratulaAgregada;
use AppBundle\Entity\Dependencia;

use AppBundle\Form\CaratulaAgregadaType;

class CaratulaAgregadaController extends Controller
{
    /**
     * @Route("/caratulaAgregada", name="caratulaAgregada")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find(3);
        $caratulaAgregada = new CaratulaAgregada();
        //$caratulaAgregada->setDependencia($dependencia);
        $form = $this->createForm(CaratulaAgregadaType::class,$caratulaAgregada);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em->persist($caratulaAgregada);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:caratulaAgregada.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
