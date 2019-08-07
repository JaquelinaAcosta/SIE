<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\LugarFisico;
use AppBundle\Entity\Dependencia;
use AppBundle\Form\LugarFisicoType;

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

            $em->persist($lugarFisico);
            $flush = $em->flush();

            if ($flush == false) {
                $this->addFlash('success', "Lugar añadido correctamente.");
            } else {
                $this->addFlash('danger', "Ocurrió un error en la creacion del lugar.");
            }
             return $this->redirectToRoute('listado_lugarfisico',["currentPage"=>1]);
        }

       
         return $this->render('AppBundle:Ubicacion:lugarFisico.html.twig', array(
                    'form' => $form->createView(),
                    'accion'=>'Nuevo'
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
            return $this->redirectToRoute('listado_lugarfisico',["currentPage"=>1]);
        }
         // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:lugarFisico.html.twig', array(
                    'form' => $form->createView(),
                    'accion'=>'Editar'
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
        
        if($flush == false){
            $this->addFlash('success', "Lugar borrado correctamente.");
            return $this->redirectToRoute('listado_lugarfisico', ["currentPage"=>1]);
        }else{
            $this->addFlash('danger', "Ocurrió un error al querer borrar lugar.");
            }

        return $this->redirectToRoute('listado_lugarfisico',["currentPage"=>1]);
        // replace this example code with whatever you need    
    }
    
    /**
     * @Route("/lugar_fisico/listado/{currentPage}", name="listado_lugarfisico")
     */
    public function listaLugarFisicoAction(Request $request, $currentPage) {

        $em = $this->getDoctrine()->getEntityManager();
        $limit=15;
        $user = $this->getUser();
        $lugares = new LugarFisico();

        if ($user->getRole() == "ROLE_ADMIN") {
            $lugares = $em->getRepository("AppBundle:LugarFisico")->getAllPers($currentPage,$limit);
            $totalItems=count($lugares);
            $maxPages = ceil($totalItems/$limit);
        } else {
            $lugares = $em->getRepository("AppBundle:LugarFisico")->findBy(['dependencia' => $user->getPersona()->getDependencia()->getId()]);
        }


        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:listadoLugarFisico.html.twig', [
                    'lugaresfisicos' => $lugares, 
                    'maxPages'=>$maxPages,
                    'totalItems'=>$totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
        ]);
    }

}
