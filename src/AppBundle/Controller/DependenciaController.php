<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Entity\Responsable;
use AppBundle\Form\DependenciaType;

class DependenciaController extends Controller {

    /**
     * @Route("/add/dependencia", name="nueva_dependencia")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = new Dependencia();
        $mesaentrada = new MesaEntrada();
        $responsables = new Responsable();
        
        
        $mesaentrada->setDependencia($dependencia);
        
        $form = $this->createForm(DependenciaType::class, $dependencia);
        

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            
            dump($dependencia);
            die();
            
//            $mesaentrada = $form->get('mesaentrada')->getData();
//           $responsables = $form['mesaentrada']['responsables']->getData();
            $em->persist($mesaentrada);
            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Dependencia:add.html.twig', [
                    'form' => $form->createView(),
                    'dependencia' => $dependencia,
                    'responsables' => $responsables
        ]);
    }

}
