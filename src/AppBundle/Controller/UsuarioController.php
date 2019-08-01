<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;

class UsuarioController extends Controller {

    /**
     * @Route("/usuario/add", name="nuevo_usuario")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = new Usuario();
        $form = $this->createForm(UsuarioType::class, $usuario, ['contrasenia' => null, 'role' => 'su']);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() and $form->isValid()) {
            if (count($em->getRepository("AppBundle:Usuario")->findBy(['iup' => $form['iup']->getData()])) == 0) {
                if ($usuario->getPersona()->getUsuario() == null) {
                    $factory = $this->get("security.encoder_factory");
                    $encoder = $factory->getEncoder($usuario);
                    $password = $encoder->encodePassword($usuario->getContrasenia(), $usuario->getSalt());
                    $usuario->setSavedPassword($form['contrasenia']->getData());
                    $usuario->setContrasenia($password);

                    $em->persist($usuario);
                    $flush = $em->flush();
                    
                    if($flush == false){
                        $this->addFlash('success', "Usuario añadido correctamente.");
                        return $this->redirectToRoute('listado_usuario');
                    }else{
                        $this->addFlash('danger', "Ocurrió un error en la creacion del usuario.");
                    }
                    
                }else{
                   $this->addFlash('danger', "La Persona ".$usuario->getPersona()." ya tiene un usuario asignado.");
                }
            } else {
                $this->addFlash('danger', "El nombre de usuario ya existe.");
            }
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuario:index.html.twig', [
                    'form' => $form->createView(),
                    'usuario' => $usuario
        ]);
    }

    /**
     * @Route("/usuario/edit/{id}", name="editar_usuario")
     */
    public function editUsuarioAction(Request $request, $id) {
        $usuarioActual = $this->getUser();
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $em->getRepository("AppBundle:Usuario")->find($id);
        $usuario->setContrasenia($usuario->getSavedPassword());
        if ($usuarioActual->getRole() == 'ROLE_ADMIN') {
            $form = $this->createForm(UsuarioType::class, $usuario, ['contrasenia' => true, 'role' => 'su']);
        } else {
            $form = $this->createForm(UsuarioType::class, $usuario, ['contrasenia' => true]);
        }


        $form->handleRequest($request);


       if ($form->isSubmitted() and $form->isValid()) {
            if (count($em->getRepository("AppBundle:Usuario")->findBy(['iup' => $form['iup']->getData()])) == 0) {
                if ($usuario->getPersona()->getUsuario() == null) {
                    $factory = $this->get("security.encoder_factory");
                    $encoder = $factory->getEncoder($usuario);
                    $password = $encoder->encodePassword($usuario->getContrasenia(), $usuario->getSalt());
                    $usuario->setSavedPassword($form['contrasenia']->getData());
                    $usuario->setContrasenia($password);

                    $em->persist($usuario);
                    $flush = $em->flush();
                    
                    if($flush == false){
                        $this->addFlash('success', "Usuario añadido correctamente.");
                        return $this->redirectToRoute('listado_usuario');
                    }else{
                        $this->addFlash('danger', "Ocurrió un error en la creacion del usuario.");
                    }
                    
                }else{
                   $this->addFlash('danger', "La Persona ".$usuario->getPersona()." ya tiene un usuario asignado.");
                }
            } else {
                $this->addFlash('danger', "El nombre de usuario ya existe.");
            }
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuario:editarUsuario.html.twig', array(
                    'form' => $form->createView(),
                    'usuario' => $usuario,
        ));
    }

    /**
     * @Route("usuario/listado", name="listado_usuario")
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
     * @Route("usuario/delete/{id}", name="eliminar_usuario")
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
