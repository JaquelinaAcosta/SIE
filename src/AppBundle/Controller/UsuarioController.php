<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Persona;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\Usuario;

use AppBundle\Form\UsuarioType;

class UsuarioController extends Controller
{
    /**
     * @Route("/usuario", name="usuario")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $usuario = new Usuario();
       
        $form = $this->createForm(UsuarioType::class,$usuario);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em->persist($usuario);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuario:index.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
