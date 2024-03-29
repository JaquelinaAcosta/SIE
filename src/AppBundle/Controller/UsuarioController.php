<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Usuario;
use AppBundle\Form\UsuarioType;
use AppBundle\Form\UsuarioFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Entity\Responsable;

class UsuarioController extends Controller {

    /**
     * @Route("/usuario/add", name="nuevo_usuario")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = new Usuario();
        $form = $this->createForm(UsuarioType::class, $usuario, ['role' => 'su']);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                if (!$em->getRepository("AppBundle:Usuario")->chequearIup($form['iup']->getData())) {
                    if ($usuario->getPersona()->getUsuario() == null) {
                        $factory = $this->get("security.encoder_factory");
                        $encoder = $factory->getEncoder($usuario);
                        $password = $encoder->encodePassword($usuario->getContrasenia(), $usuario->getSalt());
                        $usuario->setSavedPassword($form['contrasenia']->getData());
                        $usuario->setContrasenia($password);
                        $responsable = new Responsable();
                        $responsable->setUsuario($usuario);
                        $responsable->setUbicacion($usuario->getPersona());
                        $usuario->getPersona()->addResponsable($responsable);

                        $em->persist($usuario);
                        $flush = $em->flush();

                        if ($flush == false) {
                            $this->addFlash('success', "Usuario añadido correctamente.");
                            return $this->redirectToRoute('listado_usuario', [
                                        'currentPage' => 1
                            ]);
                        } else {
                            $this->addFlash('danger', "Ocurrió un error en la creacion del usuario.");
                        }
                    } else {
                        $this->addFlash('danger', "La Persona " . $usuario->getPersona() . " ya tiene un usuario asignado.");
                    }
                } else {
                    $this->addFlash('danger', "El nombre de usuario ya existe.");
                }
            }
        }

        // replace this example code with whatever you need
        return $this->render('Usuario/index.html.twig', [
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
        $usuario = $em->getRepository("AppBundle:Usuario")->findByUsuario($id);
        if (!$this->get("app.util")->VerificarUsuario($usuario, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este usuario.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $last_username = $usuario->getIup();

        $usuario->setContrasenia($usuario->getSavedPassword());
        if ($usuarioActual->getRole() == 'ROLE_ADMIN') {
            $form = $this->createForm(UsuarioType::class, $usuario, ['editar' => true, 'role' => 'su']);
        } else {
            $form = $this->createForm(UsuarioType::class, $usuario, ['editar' => true]);
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

                if ($flush == false and $usuarioActual->getRole() == 'ROLE_ADMIN') {
                    $this->addFlash('success', "Usuario editado correctamente.");
                    return $this->redirectToRoute('listado_usuario', [
                                'currentPage' => 1]);
                }
                if ($flush == false and $usuarioActual->getRole() == 'ROLE_USER') {
                    $this->addFlash('success', "Usuario editado correctamente.");
                    return $this->redirectToRoute('busqueda_expediente');
                } else {
                    $this->addFlash('danger', "Ocurrió un error en la edicion del usuario.");
                }
            } else {
                $this->addFlash('danger', "Error, el nombre de usuario ya existe.");
            }
        }

        // replace this example code with whatever you need
        return $this->render('Usuario/editarUsuario.html.twig', array(
                    'form' => $form->createView(),
                    'usuario' => $usuario,
        ));
    }

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
            $filterBuilder = $em->getRepository('AppBundle:Usuario')
                    ->createUsuarioFilter();

            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formUsuarioFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $usuario = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        } else {
            $usuarios_repo = $em->getRepository('AppBundle:Usuario')
                    ->createUsuarioFilter();
            $totalItems = count($usuarios_repo->getQuery()->getResult());
            $usuarios_repo->setFirstResult($limit * ($currentPage - 1));
            $usuarios_repo->setMaxResults($limit);
            $paginator = new Paginator($usuarios_repo, $fetchJoinCollection = true);
            $usuario = $paginator->getQuery()->getResult();
            $maxPages = (count($usuario) > 0) ?$maxPages = ceil($totalItems / $limit):$maxPages=1;
        }
        if ($formUsuarioFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('usuario_listar_request');
            return $this->redirectToRoute('listado_usuario', ['currentPage' => 1]);
        }

        if ($formUsuarioFilter->get('filter')->isClicked()) {
            $usuarioListarFilterRequest = $request->request->get('usuario_filter');
            unset($usuarioListarFilterRequest['filter']);

            $request->request->set('usuario_filter', $usuarioListarFilterRequest);
            $request->request->set('currentPage', 1);
            $this->get('session')->set('usuario_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_usuario', ['currentPage' => 1]);
            }
        }

        return $this->render('Usuario/listadoUsuarios.html.twig', array(
                    'limite' => $limit,
                    'usuarios' => $usuario,
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
        $usuario = $em->getRepository("AppBundle:Usuario")->findByUsuario($id);
        if (!$this->get("app.util")->VerificarUsuario($usuario, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este usuario.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        $usuario->setFechaBaja(new \DateTime('now'));
        $this->get('session')->remove('usuario_listar_request');
        $flush = $em->flush();

        if ($flush == false) {
            $this->addFlash('success', 'Usuario ' . $usuario->getIup() . ' eliminado correctamente.');
            return $this->redirectToRoute('listado_usuario', ['currentPage' => 1]);
        } else {
            $this->addFlash('danger', 'Ocurrio un error al intentar borrar el usuario.');
        }

        return $this->redirectToRoute('listado_usuario', ['currentPage' => 1]);
    }


    /**
     * @Route("usuario/todo-responsable/{id}", name="generar_todo_responsable")
     */
    public function generarTodoResponsableAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $em->getRepository("AppBundle:Usuario")->findByUsuario($id);
        if (!$this->get("app.util")->VerificarUsuario($usuario, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a esta función.');
            return $this->redirectToRoute('busqueda_expediente', ['currentPage' => 1]);
        }

        $mesas_de_entrada = $em->getRepository('AppBundle:MesaEntrada')->findAllMesas();
        $personas = $em->getRepository('AppBundle:Persona')->findAllPersonas();


        foreach($mesas_de_entrada as $mesa){
            $usuario_existe = true;
            foreach ($mesa->getResponsables() as $res) {
                if($usuario == $res->getUsuario()){
                        $usuario_existe = false;  
                }else{
                        $usuario_existe = true;  
                }         
            }
            if($usuario_existe){
                $responsable = new Responsable();
                $responsable->setUsuario($usuario);
                $responsable->setUbicacion($mesa);
                $usuario->addResponsable($responsable);
            }
        }

        foreach($personas as $persona){
            $usuario_existe = true;
            foreach ($persona->getResponsables() as $res) {
                if($usuario == $res->getUsuario()){
                        $usuario_existe = false;  
                }else{
                        $usuario_existe = true;  
                }         
            }
            if($usuario_existe){
                $responsable = new Responsable();
                $responsable->setUsuario($usuario);
                $responsable->setUbicacion($persona);
                $usuario->addResponsable($responsable);
            }
        }
        $em->persist($usuario);
        $flush = $em->flush();

        
        if ($flush == false) {
            $this->addFlash('success', 'El usuario ' . $usuario->getPersona() . '  ahora es responsables de todas las Mesas de Entrada y Personas disponibles en el sistema.');
            return $this->redirectToRoute('listado_usuario', ['currentPage' => 1]);
        } else {
            $this->addFlash('danger', 'Ocurrio un error!.');
        }

        return $this->redirectToRoute('listado_usuario', ['currentPage' => 1]);
    }

/**
     * @Route("usuario/borrar-todo-responsable/{id}", name="borrar_todo_responsable")
     */
    public function borrarTodoResponsableAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $em->getRepository("AppBundle:Usuario")->findByUsuario($id);
        if (!$this->get("app.util")->VerificarUsuario($usuario, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a esta función.');
            return $this->redirectToRoute('busqueda_expediente', ['currentPage' => 1]);
        }

        $mesas_de_entrada = $em->getRepository('AppBundle:MesaEntrada')->findAllMesas();
        $personas = $em->getRepository('AppBundle:Persona')->findAllPersonas();


        foreach($mesas_de_entrada as $mesa){
            foreach ($mesa->getResponsables()->getValues() as $res) {
                if($usuario == $res->getUsuario()){
                      $usuario->removeResponsable($res);
                }      
            }
        }

        foreach($personas as $persona){
             foreach ($persona->getResponsables()->getValues() as $res) {
                if($usuario == $res->getUsuario()){
                         if($usuario == $res->getUsuario()){
                      $usuario->removeResponsable($res);
                     }     
                }      
            }
        }

         $em->persist($usuario);
          $flush = $em->flush();

        
            $this->addFlash('success', 'El usuario ' . $usuario->getPersona() . ' ha sido removido como responsable de todas las Mesas de Entrada y Personas disponibles en el sistema.');
            return $this->redirectToRoute('listado_usuario', ['currentPage' => 1]);
      
    }


}
