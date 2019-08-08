<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;
use AppBundle\Form\UsuarioFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;

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
        $last_username = $usuario->getIup();
        
        $usuario->setContrasenia($usuario->getSavedPassword());
        if ($usuarioActual->getRole() == 'ROLE_ADMIN') {
            $form = $this->createForm(UsuarioType::class, $usuario, ['contrasenia' => true, 'role' => 'su']);
        } else {
            $form = $this->createForm(UsuarioType::class, $usuario, ['contrasenia' => true]);
        }


        $form->handleRequest($request);


       if ($form->isSubmitted() and $form->isValid()) {
            if (count($em->getRepository("AppBundle:Usuario")
                    ->findBy(['iup' => $form['iup']->getData()])) == 0
                    or $form['iup']->getData() == $last_username) {
                    $factory = $this->get("security.encoder_factory");
                    $encoder = $factory->getEncoder($usuario);
                    $password = $encoder->encodePassword($usuario->getContrasenia(), $usuario->getSalt());
                    $usuario->setSavedPassword($form['contrasenia']->getData());
                    $usuario->setContrasenia($password);

                    $em->persist($usuario);
                    $flush = $em->flush();
                    
                    if($flush == false){
                        $this->addFlash('success', "Usuario editado correctamente.");
                        return $this->redirectToRoute('listado_usuario');
                    }else{
                        $this->addFlash('danger', "Ocurrió un error en la edicion del usuario.");
                    }                    
            } else {
                $this->addFlash('danger', "Error, el nombre de usuario ya existe.");
            }
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Usuario:editarUsuario.html.twig', array(
                    'form' => $form->createView(),
                    'usuario' => $usuario,
        ));
    }

//    /**
//     * @Route("usuario/listado", name="listado_usuario")
//     */
//    public function listaUsuarioAction(Request $request) {
//
//        $em = $this->getDoctrine()->getEntityManager();
//        $user = $this->getUser();
//        $usuario = new Usuario();
//
//        if ($user->getRole() == "ROLE_ADMIN") {
//            $usuario = $em->getRepository("AppBundle:Usuario")->findAll();
//        }
////        else {
////            $usuario = $em->getRepository("AppBundle:Usuario")->findBy([
////                'iniciadorDependencia' => $user->getPersona()->getDependencia()
////            ]);
////        }
//        // replace this example code with whatever you need
//        return $this->render('AppBundle:Usuario:listadoUsuarios.html.twig', [
//                    'usuario' => $usuario
//        ]);
//    }
    
    /**
    * @Route("usuario/listado/{currentPage}", name="listado_usuario")
    */
    public function listaUsuarioAction(Request $request, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();
        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $usuario = array();
        $user = $this->getUser();
        
        $formUsuarioFilter = $this->createForm(UsuarioFilterType::class);
        $formUsuarioFilter->handleRequest($request);
        if ($formUsuarioFilter->isSubmitted() == false && $this->get('session')->get('usuario_listar_request')) {
            $formUsuarioFilter->handleRequest($this->get('session')->get('usuario_listar_request'));
        }

        if ($formUsuarioFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:Usuario')->createQueryBuilder('p');
            $filterBuilder->addOrderBy('p.iup', 'ASC');
            $filterBuilder->addOrderBy('p.email', 'ASC');
            
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formUsuarioFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());
            
            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);
            
            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $usuario = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        }
        
        if ($formUsuarioFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('usuario_listar_request');
            return $this->redirectToRoute('listado_usuario',['currentPage'=>1]);
        }
        
        if ($formUsuarioFilter->get('filter')->isClicked()) {           
            $usuarioListarFilterRequest = $request->request->get('usuario_filter');
            unset($usuarioListarFilterRequest['filter']);

            $request->request->set('usuario_filter', $usuarioListarFilterRequest);
            $request->request->set('currentPage',1);
            $this->get('session')->set('usuario_listar_request', $request);
            if($request->get('currentPage')>$maxPages)
            {
                 return $this->redirectToRoute('listado_usuario',['currentPage'=>1]);
            }
        }
        
        return $this->render('AppBundle:Usuario:listadoUsuarios.html.twig', array(
                    'usuario' => $usuario,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formUsuarioFilter' => $formUsuarioFilter->createView()
        ));
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
