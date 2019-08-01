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
     * @Route("/persona/add", name="nueva_persona")
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
    /**
     * @Route("/persona/edit/{id}", name="editar_persona")
     */
    public function editPersonaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $persona = $em->getRepository("AppBundle:Persona")->find($id);

        $form = $this->createForm(PersonaType::class, $persona,['role'=>'su']);
        $form->handleRequest($request);

        $user = $this->getUser();

        if ($form->isSubmitted()) {
         
                $em->persist($persona);
                $em->flush();
            
            return $this->redirectToRoute('homepage');

        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:editarPersona.html.twig', array(
                    'form' => $form->createView(),
                    'persona' => $persona,
        ));
    }
    
    
      /**
     * @Route("/persona/listado", name="listado_persona")
     */
    public function listaDependenciasAction(Request $request) {

        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->getUser();
        $dependencias = new Dependencia();

        if ($user->getRole() == "ROLE_ADMIN") {
            $dependencias = $em->getRepository("AppBundle:Persona")->findAll();
        } else {
            $this->redirectToRoute('homepage');
        }


        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:listadoPersona.html.twig', [
                    'dependencias' => $dependencias
        ]);
    }
    
}
