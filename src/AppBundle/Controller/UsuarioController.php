<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Usuario;

use AppBundle\Form\UsuarioType;

class UsuarioController extends Controller
{
    /**
     * @Route("/registro", name="nuevo_registro")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $usuario = new Usuario();                
        $form = $this->createForm(UsuarioType::class,$usuario);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() and  $form->isValid()) {
            
            $factory = $this->get("security.encoder_factory");
            $encoder = $factory->getEncoder($usuario);
            $password = $encoder->encodePassword($usuario->getContrasenia(),$usuario->getSalt());
            
            $usuario->setContrasenia($password);    
            
            $em->persist($usuario);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuario:index.html.twig', [
            'form'=> $form->createView(),
             'usuario'=>$usuario
        ]);
    }
}
