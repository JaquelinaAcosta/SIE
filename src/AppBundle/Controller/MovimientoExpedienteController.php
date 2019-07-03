<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\MovimientoExpediente;
use AppBundle\Entity\Dependencia;

use AppBundle\Form\MovimientoExpedienteType;


class MovimientoExpedienteController extends Controller
{
    /**
     * @Route("/movimientoExpediente", name="moverExpediente")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find(3);
        
        //no se is la ubicacion hay que traerla o llevarla a la base de datos
        $ubicacion = $em->getRepository("AppBundle:Tema")->find(3);
        
        $movimientoExpediente = new MovimientoExpediente();
        
        
        //$movimientoExpediente->setDependencia($dependencia);
        
        $form = $this->createForm(MovimientoExpedienteType::class,$movimientoExpediente);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em->persist($movimientoExpediente);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:MovimientoExpediente:index.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
