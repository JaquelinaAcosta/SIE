<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\LugarFisico;
use AppBundle\Entity\Dependencia;

use AppBundle\Form\LugarFisicoType;

class LugarFisicoController extends Controller
{
    /**
     * @Route("/lugarFisico", name="lugarFisico")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find(3);
        $lugarFisico = new LugarFisico();
        $lugarFisico->setDependencia($dependencia);
        $form = $this->createForm(LugarFisicoType::class,$lugarFisico);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em->persist($lugarFisico);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:lugarFisico.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
