<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Resolucion;
use AppBundle\Form\ResolucionType;
use AppBundle\Entity\Usuario;

class ResolucionController extends Controller
{
    /**
     * @Route("/add/resolucion/{id}", name="nueva_resolucion")
     */
    public function indexAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $usuario = new Usuario();
        $dependencia = $em->getRepository("AppBundle:Expediente")->find($id);
        $resolucion = new Resolucion();
        //$resolucion->setDependencia($dependencia);
        $form = $this->createForm(ResolucionType::class,$resolucion);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
           
            $usuario = $form->get('usuario')->getData();
            
            $resolucion->setUsuario($usuario);
           
            $em->persist($resolucion);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:resolucion.html.twig', [
            'form'=> $form->createView(), 
            'usuario'=>$usuario
        ]);
    }
}
