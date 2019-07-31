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
        $form = $this->createForm(UsuarioType::class,$usuario, ['contrasenia' => true, 'role'=>'su']);
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
         
        $usuarioActual = $this->getUser();
        
        if($usuarioActual->getRole() == 'ROLE_ADMIN'){
             $form = $this->createForm(UsuarioType::class, $usuario, ['contrasenia' => true,'role'=>'su']);
        }else{
              $form = $this->createForm(UsuarioType::class, $usuario, ['contrasenia' => true,'role'=>false]);
        }
        
       
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
  
    /**
     * @Route("listaUsuario", name="lista_usuario")
     */
    public function listaUsuarioAction(Request $request) {

        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->getUser();
        $usuario = new Usuario();

        if ($user->getRole() == "ROLE_ADMIN") {
            $usuario = $em->getRepository("AppBundle:Usuario")->findAll();
        } 
//        else {
//            $usuario = $em->getRepository("AppBundle:Usuario")->findBy([
//                'iniciadorDependencia' => $user->getPersona()->getDependencia()
//            ]);
//        }


        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuario:listadoUsuarios.html.twig', [
                    'usuario' => $usuario
        ]);
    }
    
    /**
     * @Route("listaUsuario/delete/{id}", name="eliminar_usuario")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $em->getRepository("AppBundle:Usuario")->find($id);

        // replace this example code with whatever you need
        if (!$usuario) {
            throw $this->createNotFoundException('No element found for id ' . $id);
        }

        $em->remove($usuario);
        $flush = $em->flush();

//        if ($flush == null) {
//            echo "Post se ha borrado correctamente";
//        } else {
//            echo "El post no se ha borrado";
//        }

        return $this->redirectToRoute('lista_usuario');
    }
    
    
}
