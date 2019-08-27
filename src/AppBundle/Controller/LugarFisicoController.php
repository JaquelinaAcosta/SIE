<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\LugarFisico;
use AppBundle\Entity\Dependencia;
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

        if ($form->isValid()) {

            $responsable = new Responsable();
            $responsable->setUbicacion($lugarFisico);
            $responsable->setUsuario($this->getUser());
            $lugarFisico->addResponsable($responsable);
            $em->persist($lugarFisico);
            $flush = $em->flush();

            if ($flush == false) {
                $this->addFlash('success', "Lugar añadido correctamente.");
            } else {
                $this->addFlash('danger', "Ocurrió un error en la creacion del lugar.");
            }
            return $this->redirectToRoute('listado_lugarfisico', ["currentPage" => 1]);
        }


        return $this->render('AppBundle:Ubicacion:lugarFisico.html.twig', array(
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
        $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->find($id);
        if ($user->getRole() == "ROLE_ADMIN") {

            $form = $this->createForm(LugarFisicoType::class, $lugarfisico, ['edit_mode' => true]);
        } else {
            $form = $this->createForm(LugarFisicoType::class, $lugarfisico);
        }


        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $em->persist($lugarfisico);
            $flush = $em->flush();
            if ($flush == false) {
                $this->addFlash('success', "Lugar editado correctamente.");
            } else {
                $this->addFlash('danger', "Ocurrió un error en la edición del lugar.");
            }
            return $this->redirectToRoute('listado_lugarfisico', ["currentPage" => 1]);
        }
        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:lugarFisico.html.twig', array(
                    'form' => $form->createView(),
                    'accion' => 'Editar'
        ));
    }

    /**
     * @Route("/lugar_fisico/delete/{id}", name="borrar_lugarfisico")
     */
    public function borrarLugarFisicoAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->find($id);

        $form = $this->createForm(LugarFisicoType::class, $lugarfisico);
        $form->handleRequest($request);

        if (!$lugarfisico) {
            throw $this->createNotFoundException('No element found for id ' . $id);
        }

        $em->remove($lugarfisico);
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
        return $this->render('AppBundle:Ubicacion:listadoLugarFisico.html.twig', array(
                    'lugarFisico' => $lugarFisico,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formLugarFisicoFilter' => $formLugarFisicoFilter->createView()
        ));
    }

    /**
     * @Route("/adm/gestionar/lugarfisico_responsables/{id}", name="gestionar_lugarfisico_responsables")
     */
    public function lugarfisicoGestionarResponsblesAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->find($id);

        $original_responsables = new ArrayCollection();

        $form = $this->createForm(\AppBundle\Form\LugarFisicoResponsablesType::class, $lugarfisico, ['dependencia_id' => $lugarfisico->getDependencia()->getId()]);

        foreach ($lugarfisico->getResponsables() as $responsable) {
            $original_responsables->add($responsable);
        }


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($original_responsables as $responsable) {
                if (false === $lugarfisico->getResponsables()->contains($responsable)) {
                    // remove the Task from the Tag
                    //  $responsable->getUbicacion()->removeElement($mesaentrada);
                    // if it was a many-to-one relationship, remove the relationship like this
                    // $tag->setTask(null);
                    // if you wanted to delete the Tag entirely, you can also do that
                    // $entityManager->remove($tag);
                    $em->remove($responsable);
                }
            }

            foreach ($form['responsables']->getData() as $responsable) {
                $responsable->setUbicacion($lugarfisico);
                //$mesaentrada->addResponsable($responsable);
            }

            $em->persist($lugarfisico);
            $flush = $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:lugarfisicoResponsables.html.twig', [
                    'form' => $form->createView(),
                    'lugarfisico' => $lugarfisico
        ]);
    }

}
