<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

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
     * @Route("/persona_search", name="persona_search")
     */
    public function searchPersonaAction(Request $request) {
        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
        $dependencia = $this->getUser()->getPersona()->getDependencia();
        $personas = $this->getDoctrine()->getRepository('AppBundle:Persona')->findLikeName($q, $dependencia->getId());

        $results = array();
        foreach ($personas as $persona) {
            $results[] = array('id' => $persona->getId(),
                'label' => trim($persona->getApellido() . ", " . $persona->getNombre()),
                'value' => trim($persona->getApellido() . ", " . $persona->getNombre()));
        }
        return new JsonResponse($results);
    }

    /**
     * @Route("/persona_search_dependencia", name="persona_search_dependencia")
     */
    public function searchPersonaByDependenciaAction(Request $request) {
        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
        $dependencia = $this->getUser()->getPersona()->getDependencia();
        $personas = $this->getDoctrine()->getRepository('AppBundle:Persona')->findByDependencia($q, $dependencia);
        $results = array();
        foreach ($personas as $persona) {
            $results[] = array('id' => $persona->getId(),
                'label' => trim($persona->getApellido() . ", " . $persona->getNombre()),
                'value' => trim($persona->getApellido() . ", " . $persona->getNombre()));
        }
        return new JsonResponse($results);
    }

    /**
     * @Route("/persona_get{id}", name="persona_get")
     */
    public function getPersonaAction($id = null) {
//        $id = $request->get('id');
        $persona = $this->getDoctrine()->getRepository('AppBundle:Persona')->find($id);
        if (null == $persona) {
            $this->addFlash('info', 'La persona no existe.');
            return $this->redirectToRoute('homepage');
        }
        return new JsonResponse(trim($persona->getApellido() . ", " . $persona->getNombre()));
    }

    /**
     * @Route("/tema_search", name="tema_search")
     */
    public function searchTemaAction(Request $request) {
        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
        $temas = $this->getDoctrine()->getRepository('AppBundle:Tema')->findLikeName($q);

        $results = array();
        foreach ($temas as $tema) {
            $results[] = array('id' => $tema->getId(),
                'label' => trim($tema->__toString()),
                'value' => trim($tema->__toString()));
        }
        return new JsonResponse($results);
    }

    /**
     * @Route("/tema_get{id}", name="tema_get")
     */
    public function getTemaAction($id = null) {
        $tema = $this->getDoctrine()->getRepository('AppBundle:Tema')->find($id);
        if (null == $tema) {
            $this->addFlash('info', 'El tema no existe.');
            return $this->redirectToRoute('homepage');
        }
        return new JsonResponse(trim($tema->__toString()));
    }

    /**
     * @Route("/usuario_search", name="usuario_search")
     */
    public function searchUsuarioAction(Request $request) {
        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
        $usuarios = $this->getDoctrine()->getRepository('AppBundle:Usuario')->findLikeName($q);

        $results = array();
        foreach ($usuarios as $usuario) {
            $results[] = array('id' => $usuario->getId(),
                'label' => trim($usuario->__toString()),
                'value' => trim($usuario->__toString()));
        }
        return new JsonResponse($results);
    }

    /**
     * @Route("/usuario_get{id}", name="usuario_get")
     */
    public function getUsuarioAction($id = null) {
        $usuario = $this->getDoctrine()->getRepository('AppBundle:Usuario')->find($id);
        if (null == $usuario) {
            $this->addFlash('info', 'El usuario no existe.');
            return $this->redirectToRoute('homepage');
        }
        return new JsonResponse(trim($usuario->__toString()));
    }

    /**
     * @Route("/expediente_search", name="expediente_search")
     */
    public function searchExpedienteAction(Request $request) {
        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
        $expedientes = $this->getDoctrine()->getRepository('AppBundle:Expediente')
                ->findLikeNumber($q, $this->getUser()->getPersona()->getDependencia());

        $results = array();
        foreach ($expedientes as $expediente) {
            $results[] = array('id' => $expediente->getId(),
                'label' => trim($expediente->__toString()),
                'value' => trim($expediente->__toString()));
        }
        return new JsonResponse($results);
    }

    /**
     * @Route("/expediente_get{id}", name="expediente_get")
     */
    public function getExpedienteAction($id = null) {
        $expediente = $this->getDoctrine()->getRepository('AppBundle:Expediente')->find($id);
        if (null == $expediente) {
            $this->addFlash('info', 'El expediente no existe.');
            return $this->redirectToRoute('homepage');
        }
        return new JsonResponse(trim($expediente->__toString()));
    }

}
