<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Form\DependenciaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DependenciaController extends Controller {

    /**
     * @Route("/add/dependencia", name="nueva_dependencia")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = new Dependencia();
        $mesaentrada = new MesaEntrada();

        $form = $this->createForm(DependenciaType::class, $dependencia);


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $mesaentrada->setDependencia($dependencia);
            $dependencia->setMesaentrada($mesaentrada);
            $dependencia->setResponsable($form['responsable']);
            $mesaentrada->setCodigoExpediente($form['mesaentrada']['codigoExpediente']->getData());
            foreach ($form['mesaentrada']['responsables']->getData() as $responsable) {
                $responsable->setUbicacion($mesaentrada);
                $mesaentrada->addResponsable($responsable);
            }


//            $em->persist($mesaentrada);
//            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Dependencia:add.html.twig', [
                    'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/responsable_search", name="search_r")
     */
     public function searchResponsable(Request $request) {
        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
        $personas = $this->getDoctrine()->getRepository('AppBundle:Persona')->findLikeName($q);
        
        $results = array();
        foreach($personas as $persona)
        {
            $results[] = array('id'=>$persona->getId(),'name'=>$persona->getApellido(),'label'=>$persona->getApellido().", ".$persona->getNombre());
        }
        return new JsonResponse($results);
    }
    
     /**
     * @Route("/responsable_get/{id}", name="get_r")
     */
    public function getResponsable($id = null) {
        $persona = $this->getDoctrine()->getRepository('AppBundle:Persona')->find($id);
        return new Response($persona->getNombre());
//         return $this->json($persona->getNombre());

    }
    

}
