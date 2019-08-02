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
        $personas = $this->getDoctrine()->getRepository('AppBundle:Persona')->findLikeName($q);

        $results = array();
        foreach ($personas as $persona) {
            $results[] = array('id' => $persona->getId(),
                'label' => trim($persona->getApellido().", ".$persona->getNombre()),
                'value' => trim($persona->getApellido().", ".$persona->getNombre()));
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
        return new JsonResponse(trim($persona->getApellido().", ".$persona->getNombre()));
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
    
     
}
