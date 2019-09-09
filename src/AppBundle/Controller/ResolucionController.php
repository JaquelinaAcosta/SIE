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
     * @Route("/expediente/resolucion/{id}", name="nueva_resolucion")
     */
    public function indexAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $this->getUser();
        $expediente = $em->getRepository("AppBundle:Expediente")->findByExpediente($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $usuario)) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $resolucion = new Resolucion();
        $form = $this->createForm(ResolucionType::class, $resolucion);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $resolucion->setUsuario($usuario);
                $resolucion->setExpediente($expediente);
                $fecha = \DateTime::createFromFormat('d-m-Y', date($form['fechaResolucion']->getData()));
                $resolucion->setFechaResolucion($fecha);
                $em->persist($resolucion);
                $flush = $em->flush();

                if ($flush == false) {
                    $this->addFlash('success', 'Resolucion añadida correctamente.');
                } else {
                    $this->addFlash('danger', 'Ocurrió un error al intentar añadir la resolución.');
                }

                return $this->redirectToRoute('ver_expediente', ['id' => $id]);
            }
        }

        // replace this example code with whatever you need
        return $this->render('Expediente/resolucion.html.twig', [
                    'form' => $form->createView(),
                    'usuario' => $usuario,
                    'expediente' => $expediente
        ]);
    }

    /**
     * @Route("expediente/resolucion/detalle/{id}", name="ver_resolucion")
     */
    public function resolucionAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->findByExpediente($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser(),true)) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        // replace this example code with whatever you need
        return $this->render('Expediente/detalleResolucion.html.twig', [
                    'expediente' => $expediente
        ]);
    }

    /**
     * @Route("/expediente/resolucion/{id}/editar", name="editar_resolucion")
     */
    public function editarResolucionAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $usuario = $this->getUser();
        $resolucion = $em->getRepository("AppBundle:Resolucion")->findByResolucion($id);
        $expediente = $resolucion->getExpediente();
        if (!$this->get("app.util")->VerificarExpediente($expediente, $usuario)) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $resolucion->setFechaResolucion($resolucion->getFechaResolucion()->format('d-m-Y'));

        $form = $this->createForm(ResolucionType::class, $resolucion);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $fecha = \DateTime::createFromFormat('d-m-Y', date($form['fechaResolucion']->getData()));
                $resolucion->setFechaResolucion($fecha);
                
                
                $em->persist($resolucion);
                $flush = $em->flush();

                if ($flush == false) {
                    $this->addFlash('success', 'Resolucion editada correctamente.');
                } else {
                    $this->addFlash('danger', 'Ocurrió un error al intentar editar la resolución.');
                }

                return $this->redirectToRoute('ver_expediente', ['id' => $expediente->getId()]);
            }
        }

        // replace this example code with whatever you need
        return $this->render('Expediente/resolucion.html.twig', [
                    'form' => $form->createView(),
                    'usuario' => $usuario,
                    'expediente' => $expediente
        ]);
    }

    /**
     * @Route("expediente/resolucion/delete/{id}", name="eliminar_resolucion")
     */
    public function resolucionDeleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $resolucion = $em->getRepository("AppBundle:Resolucion")->findByResolucion($id);
        $expediente = $resolucion->getExpediente();
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        $em->remove($resolucion);
        $em->persist($expediente);
        $flush = $em->flush();

        if ($flush == false) {
            $this->addFlash('success', 'Resolucion borrada correctamente.');
        } else {
            $this->addFlash('danger', 'Ocurrió un error al intentar borrar la resolución.');
        }

        return $this->redirectToRoute('ver_expediente', ['id' => $expediente->getId()]);
    }

}
