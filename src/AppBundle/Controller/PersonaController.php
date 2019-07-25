<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Persona;
use AppBundle\Entity\Dependencia;

use AppBundle\Form\PersonaType;

class PersonaController extends Controller
{
    /**
     * @Route("/persona", name="persona")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();       
        $persona = new Persona();
     
        $form = $this->createForm(PersonaType::class,$persona);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            
            $dependencia = $form['dependencia']->getData();
            $persona->setDependencia($dependencia);
            
            $em->persist($persona);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:persona.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
