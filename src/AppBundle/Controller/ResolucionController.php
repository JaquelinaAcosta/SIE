<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Resolucion;
use AppBundle\Form\ResolucionType;
use AppBundle\Entity\Usuario;

class ResolucionController extends Controller {

    /**
     * @Route("/expediente/{id}/resolucion/", name="nueva_resolucion")
     */
    public function indexAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $this->getUser();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        $resolucion = new Resolucion();
        $form = $this->createForm(ResolucionType::class, $resolucion);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $resolucion->setUsuario($usuario);
                $resolucion->setExpediente($expediente);
                $resolucion->setFechaResolucion(date($form['fechaResolucion']->getData()." H:i:s"));
                $em->persist($resolucion);
                $em->flush();
                
                return $this->redirectToRoute('ver_expediente', ['id'=>$id]);

                               
            }
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:resolucion.html.twig', [
                    'form' => $form->createView(),
                    'usuario' => $usuario,
                'expediente'=>$expediente
        ]);
    }
    
      /**
     * @Route("expediente/{id}/resolucion/detalle", name="ver_resolucion")
     */
    public function resolucionAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:detalleResolucion.html.twig', [
                    'expediente' => $expediente
        ]);
    }
    
}
