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
        $form = $this->createForm(UsuarioType::class,$usuario, ['contrasenia' => true]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() and  $form->isValid()) {
            
            $factory = $this->get("security.encoder_factory");
            $encoder = $factory->getEncoder($usuario);
            $password = $encoder->encodePassword($usuario->getContrasenia(),$usuario->getSalt());
            $usuario->setSavedPassword($form['contrasenia']->getData());
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
    /**
     * @Route("registro/editUsuario/{id}", name="editar_usuario")
     */
    public function editUsuarioAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $em->getRepository("AppBundle:Usuario")->find($id);       
        $usuario->setContrasenia($usuario->getSavedPassword()); 
         
        $form = $this->createForm(UsuarioType::class, $usuario, ['contrasenia' => true]);
        $form->handleRequest($request);     
        
        $user = $this->getUser();
               
        if ($form->isSubmitted() and $form->isValid() ) {
            
            $factory = $this->get("security.encoder_factory");
            $encoder = $factory->getEncoder($usuario);
            $password = $encoder->encodePassword($form['contrasenia']->getData(),$usuario->getSalt());
            $usuario->setSavedPassword($form['contrasenia']->getData());
            $usuario->setContrasenia($password);    
                      
            $em->persist($usuario);
            $em->flush();
            
            return $this->redirectToRoute('homepage');
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuario:editarUsuario.html.twig', array(
                    'form' => $form->createView(),
                    'usuario' => $usuario,
        ));
    }
}
