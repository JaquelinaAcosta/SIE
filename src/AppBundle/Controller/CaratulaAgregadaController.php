<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CaratulaAgregada;
use AppBundle\Form\CaratulaAgregadaType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CaratulaAgregadaController extends Controller
{
    /**
     * @Route("expediente/view/caratulaAgregada/{id}", name="caratulaAgregada")
     */
    public function indexAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $caratulaAgregada = new CaratulaAgregada();
        
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $form = $this->createForm(CaratulaAgregadaType::class,$caratulaAgregada);
        
        $form->handleRequest($request);
       
        
        if ($form->isValid()) {
            $caratulaAgregada->setExpediente($expediente);
            $em->persist($caratulaAgregada);
            $em->flush();
            return $this->redirectToRoute('ver_expediente',['id'=>$id]);
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:caratulaAgregada.html.twig', [
            'form'=> $form->createView(),
            'expediente'=>$expediente,
            'caratulaAgregada'=>$caratulaAgregada
        ]);
    }
    
    /**
     * @Route("expediente/view/deleteCaratula/{id}", name="eliminar_caratula")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $caratula = $em->getRepository("AppBundle:CaratulaAgregada")->find($id);
        

        // replace this example code with whatever you need
        if (!$caratula) {
            throw $this->createNotFoundException('No element found for id ' . $id);
        }

        $em->remove($caratula);
        $flush = $em->flush();
        
         return $this->redirectToRoute('ver_expediente', ['id'=> $caratula->getExpediente()->getId()]);
    }
    
    
    
    /**
     * @Route("expediente/view/editCaratula/{id}", name="editar_caratula")
     */
    public function editCaratulaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $caratulaAgregada = $em->getRepository("AppBundle:CaratulaAgregada")->find($id);

        $form = $this->createForm(CaratulaAgregadaType::class, $caratulaAgregada);
        $form->handleRequest($request);
        
        $user = $this->getUser();

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($caratulaAgregada);
                $em->flush();
            }
            return $this->redirectToRoute('ver_expediente', ['id'=> $caratulaAgregada->getExpediente()->getId()]);

        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:editarCaratulaAgregada.html.twig', array(
                    'form' => $form->createView(),
                    'caratulaAgregada' => $caratulaAgregada,
        ));
    }
}
