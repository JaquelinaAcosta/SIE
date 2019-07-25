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
    
        $form = $this->createForm(DependenciaType::class, $dependencia);
        

        $form->handleRequest($request);

        if ($form->isSubmitted()) {                     
            $mesaentrada->setDependencia($dependencia);
            $dependencia->setMesaentrada($mesaentrada);
            $mesaentrada->setCodigoExpediente($form['mesaentrada']['codigoExpediente']->getData());
//            foreach($form['mesaentrada']['responsables']->getData() as $responsable){
//                $responsable->setUbicacion($mesaentrada);
//                $mesaentrada->addResponsable($responsable);
//            }  
            
//            dump($dependencia);
//            die();
            
            $em->persist($mesaentrada);
            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Dependencia:add.html.twig', [
                    'form' => $form->createView()
        ]);
    }

}
