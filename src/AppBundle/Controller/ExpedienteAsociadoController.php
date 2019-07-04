<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\ExpedienteAsociado;
use AppBundle\Entity\Dependencia;

use AppBundle\Form\ExpedienteAsociadoType;

class ExpedienteAsociadoController extends Controller
{
    /**
     * @Route("/expedienteAsociado", name="expedienteAsociado")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find(3);
        $expedienteAsociado = new ExpedienteAsociado();
        //$expedienteAsociado->setDependencia($dependencia);
        $form = $this->createForm(ExpedienteAsociadoType::class,$expedienteAsociado);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em->persist($expedienteAsociado);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:expedienteAsociado.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
