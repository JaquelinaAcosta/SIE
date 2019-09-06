<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\LugarFisico;
use AppBundle\Form\LugarFisicoType;
use AppBundle\Form\LugarFisicoFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Responsable;

class LugarFisicoController extends Controller {

    /**
     * @Route("/lugar_fisico/add", name="nuevo_lugarfisico")
     */
    public function nuevoLugarFisicoAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $lugarFisico = new LugarFisico();
        $user = $this->getUser();
        if ($user->getRole() == "ROLE_ADMIN") {
            $form = $this->createForm(LugarFisicoType::class, $lugarFisico, ['edit_mode' => true]);
        } else {
            $lugarFisico->setDependencia($user->getPersona()->getDependencia());
            $form = $this->createForm(LugarFisicoType::class, $lugarFisico);
        }

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                if ($user->getRole() != 'ROLE_ADMIN') {
                    $responsable = new Responsable();
                    $responsable->setUbicacion($lugarFisico);
                    $responsable->setUsuario($this->getUser());
                    $lugarFisico->addResponsable($responsable);
                }

                $em->persist($lugarFisico);
                $flush = $em->flush();

                if ($flush == false) {
                    $this->addFlash('success', "Lugar añadido correctamente.");
                } else {
                    $this->addFlash('danger', "Ocurrió un error en la creacion del lugar.");
                }
                return $this->redirectToRoute('listado_lugarfisico', ["currentPage" => 1]);
            }
        }



        return $this->render('Ubicacion/lugarFisico.html.twig', array(
                    'form' => $form->createView(),
                    'accion' => 'Nuevo'
        ));
    }

    /**
     * @Route("/lugar_fisico/edit/{id}", name="editar_lugarfisico")
     */
    public function editLugarFisicoAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->getUser();
        $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->findByLugar($id);

        if (!$this->get("app.util")->VerificarLugarFisico($lugarfisico, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este lugar.');
            return $this->redirectToRoute('listado_lugarfisico', ['currentPage' => 1]);
        }

        if ($user->getRole() == "ROLE_ADMIN") {

            $form = $this->createForm(LugarFisicoType::class, $lugarfisico, ['edit_mode' => true]);
        } else {
            $form = $this->createForm(LugarFisicoType::class, $lugarfisico);
        }


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($lugarfisico);
                $flush = $em->flush();
                if ($flush == false) {
                    $this->addFlash('success', "Lugar editado correctamente.");
                } else {
                    $this->addFlash('danger', "Ocurrió un error en la edición del lugar.");
                }
                return $this->redirectToRoute('listado_lugarfisico', ["currentPage" => 1]);
            }
        }
        // replace this example code with whatever you need
        return $this->render('Ubicacion/lugarFisico.html.twig', array(
                    'form' => $form->createView(),
                    'accion' => 'Editar'
        ));
    }

    /**
     * @Route("/lugar_fisico/delete/{id}", name="baja_lugarfisico")
     */
    public function borrarLugarFisicoAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->findByLugar($id);
        if (!$this->get("app.util")->VerificarLugarFisico($lugarfisico, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este lugar.');
            return $this->redirectToRoute('listado_lugarfisico', ['currentPage' => 1]);
        }
<<<<<<< HEAD
=======
                
        foreach ($lugarfisico->getResponsables() as $responsable) {
            $em->remove($responsable);
        }
        
        $form = $this->createForm(LugarFisicoType::class, $lugarfisico);
        $form->handleRequest($request);
>>>>>>> 715b9df962b1e36e175ee8dde49fdbfc37520d08


        $lugarfisico->setFechaBaja(new \DateTime('now'));
        $flush = $em->flush();

        if ($flush == false) {
            $this->addFlash('success', "Lugar borrado correctamente.");
            return $this->redirectToRoute('listado_lugarfisico', ["currentPage" => 1]);
        } else {
            $this->addFlash('danger', "Ocurrió un error al querer borrar lugar.");
        }

        return $this->redirectToRoute('listado_lugarfisico', ["currentPage" => 1]);
        // replace this example code with whatever you need    
    }

    /**
     * @Route("/lugar_fisico/listado/{currentPage}", name="listado_lugarfisico")
     */
    public function listaLugarFisicoAction(Request $request, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();
        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $lugarFisico = array();
        $user = $this->getUser();
        $rol = $user->getRole();

        $formLugarFisicoFilter = $this->createForm(LugarFisicoFilterType::class, $lugarFisico, [
            'role' => $rol]);
        $formLugarFisicoFilter->handleRequest($request);
        if ($formLugarFisicoFilter->isSubmitted() == false && $this->get('session')->get('lugarFisico_listar_request')) {
            $formLugarFisicoFilter->handleRequest($this->get('session')->get('lugarFisico_listar_request'));
        }

        if ($formLugarFisicoFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:LugarFisico')
                    ->createLugarFilter($user);

            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formLugarFisicoFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $lugarFisico = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        } else {
            $lugarfisico_repo = $em->getRepository('AppBundle:LugarFisico')
                    ->createLugarFilter($user);
            $totalItems = count($lugarfisico_repo->getQuery()->getResult());
            $lugarfisico_repo->setFirstResult($limit * ($currentPage - 1));
            $lugarfisico_repo->setMaxResults($limit);
            $paginator = new Paginator($lugarfisico_repo, $fetchJoinCollection = true);
            $lugarFisico = $paginator->getQuery()->getResult();
            $maxPages = (count($lugarFisico) > 0) ? $maxPages = ceil($totalItems / $limit) : $maxPages = 1;
        }

        if ($formLugarFisicoFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('lugarFisico_listar_request');
            return $this->redirectToRoute('listado_lugarfisico', ['currentPage' => 1]);
        }

        if ($formLugarFisicoFilter->get('filter')->isClicked()) {
            $usuarioListarFilterRequest = $request->request->get('lugarFisico_filter');
            unset($usuarioListarFilterRequest['filter']);

            $request->request->set('lugarFisico_filter', $usuarioListarFilterRequest);
            $request->request->set('currentPage', 1);
            $this->get('session')->set('lugarFisico_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_lugarfisico', ['currentPage' => 1]);
            }
        }
        return $this->render('Ubicacion/listadoLugarFisico.html.twig', array(
                    'limite' => $limit,
                    'lugarFisico' => $lugarFisico,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formLugarFisicoFilter' => $formLugarFisicoFilter->createView()
        ));
    }

    /**
     * @Route("/gestionar/lugarfisico_responsables/{id}", name="gestionar_lugarfisico_responsables")
     */
    public function lugarfisicoGestionarResponsblesAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->find($id);
        if (!$this->get("app.util")->VerificarLugarFisico($lugarfisico, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este lugar.');
            return $this->redirectToRoute('listado_lugarfisico', ['currentPage' => 1]);
        }
        $original_responsables = new ArrayCollection();

        $form = $this->createForm(\AppBundle\Form\LugarFisicoResponsablesType::class, $lugarfisico, ['dependencia_id' => $lugarfisico->getDependencia()->getId()]);

        foreach ($lugarfisico->getResponsables() as $responsable) {
            $original_responsables->add($responsable);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($original_responsables as $responsable) {
                if (false === $lugarfisico->getResponsables()->contains($responsable)) {
                    $em->remove($responsable);
                }
            }

            foreach ($form['responsables']->getData() as $responsable) {
                $responsable->setUbicacion($lugarfisico);
            }

            $em->persist($lugarfisico);
            $flush = $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('Ubicacion/lugarfisicoResponsables.html.twig', [
                    'form' => $form->createView(),
                    'lugarfisico' => $lugarfisico
        ]);
    }

}
