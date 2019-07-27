<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    /**
     * @Route("/home", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig', [
            'texto'=> 'Hola Mundo' 
        ]);
    }
    
    

// /**
//     * @Route("/responsable_search", name="search_r")
//     */
//     public function searchResponsable(Request $request) {
//        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
//        $personas = $this->getDoctrine()->getRepository('AppBundle:Persona')->findLikeName($q);
//        
//        $results = array();
//        foreach($personas as $persona)
//        {
//            $results[] = array('id'=>$persona->getId(),'name'=>$persona->getApellido(),'label'=>$persona->getApellido().", ".$persona->getNombre());
//        }
//        return new JsonResponse($results);
//    }
//    
//     /**
//     * @Route("/responsable_get", name="get_r")
//     */
//    public function getResponsable($id = null) {
//        $persona = $this->getDoctrine()->getRepository('AppBundle:Persona')->find($id);
//        dump($persona);
//        die();
//        return $this->json($persona->getNombre());
////         return $this->json($persona->getNombre());
//
//    }
    
    
}
