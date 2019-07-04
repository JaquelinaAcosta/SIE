<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Resolucion;
use AppBundle\Entity\Dependencia;

use AppBundle\Form\ResolucionType;

class ResolucionController extends Controller
{
    /**
     * @Route("/resolucion", name="resolucion")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find(3);
        $resolucion = new Resolucion();
        //$resolucion->setDependencia($dependencia);
        $form = $this->createForm(ResolucionType::class,$resolucion);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em->persist($resolucion);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:resolucion.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
