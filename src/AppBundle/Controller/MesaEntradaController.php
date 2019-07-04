<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\MesaEntrada;

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
        $mesaEntrada = new MesaEntrada();
        $mesaEntrada->setDependencia($dependencia);
        $form = $this->createForm(MesaEntradaType::class,$mesaEntrada);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em->persist($mesaEntrada);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:mesaEntrada.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
