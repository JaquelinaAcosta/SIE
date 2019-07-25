<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Persona;
use AppBundle\Entity\Tema;
use AppBundle\Form\ExpedienteType;
use \AppBundle\Entity\MesaEntrada;
use AppBundle\Entity\ExpedienteAsociado;

class ExpedienteController extends Controller {

    /**
     * @Route("/add/expediente", name="nuevo_expediente")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = new Expediente();
        $expedienteAsociado = new ExpedienteAsociado();

        $form = $this->createForm(ExpedienteType::class, $expediente);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {              
                foreach ($form['expedientes_asociados']->getData() as $expediente_asoc) {
                    $expediente_asoc->setExpedientePadre($expediente);
                }

//                dump($expediente);
//                die();
                $em->persist($expediente);
                $em->flush();
            }

            return $this->redirectToRoute('listado_expediente');
        }


        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:add.html.twig', [
                    'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/ajax-form", name="add_evento")
     */
    public function ajaxFormAction(Request $request) {
        $form = $this->createForm(ExpedienteType::class);
        $form->handleRequest($request);


        return $this->render('AppBundle:Expediente:index.html.twig', [
                    'form' => $form->createView()
        ]);
    }

    /**
     * @Route("expediente/listado", name="listado_expediente")
     */
    public function listaExpedientesAction(Request $request) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->findAll();

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:listadoExpediente.html.twig', [
                    'expediente' => $expediente
        ]);
    }

    /**
     * @Route("expediente/view/{id}", name="ver_expediente")
     */
    public function expedienteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        $tema = $em->getRepository("AppBundle:Tema")->find(1);
        
//        dump($tema->getExpedientes()->getValues());
//        die();
//        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:detalleExpediente.html.twig', [
                    'expediente' => $expediente
        ]);
    }

    /**
     * @Route("expediente/delete/{id}", name="eliminar_expediente")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        // replace this example code with whatever you need
        if (!$expediente) {
            throw $this->createNotFoundException('No element found for id ' . $id);
        }

        $em->remove($expediente);
        $flush = $em->flush();

//        if ($flush == null) {
//            echo "Post se ha borrado correctamente";
//        } else {
//            echo "El post no se ha borrado";
//        }

        return $this->redirectToRoute('listado_expediente');
    }

    /**
     * @Route("expediente/edit/{id}", name="editar_expediente")
     */
    public function editAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $form = $this->createForm(ExpedienteType::class, $expediente);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $em->persist($expediente);
                $flush = $em->flush();
            }

            return $this->redirectToRoute('listado_expediente');
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:edit.html.twig', array(
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ));
    }

}
