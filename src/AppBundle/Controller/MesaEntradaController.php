<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Entity\Responsable;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Form\MesaEntradaType;

class MesaEntradaController extends Controller {

    /**
     * @Route("/gestionar/mesa_entrada", name="gestionar_mesaentrada")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $mesaentrada = $this->getUser()->getPersona()->getDependencia()->getMesaentrada();

        $original_responsables = new ArrayCollection();

        $form = $this->createForm(MesaEntradaType::class, $mesaentrada, ['gestion' => true]);

        foreach ($mesaentrada->getResponsables() as $responsable) {
            $original_responsables->add($responsable);
        }


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($original_responsables as $responsable) {
                if (false === $mesaentrada->getResponsables()->contains($responsable)) {
                    // remove the Task from the Tag
                  //  $responsable->getUbicacion()->removeElement($mesaentrada);
                    
                    // if it was a many-to-one relationship, remove the relationship like this
                    // $tag->setTask(null);
                    
                   // if you wanted to delete the Tag entirely, you can also do that
                    // $entityManager->remove($tag);
                   $em->remove($responsable);
                }
            }

            foreach ($form['responsables']->getData() as $responsable) {
                $responsable->setUbicacion($mesaentrada);
                //$mesaentrada->addResponsable($responsable);
            }


            $em->persist($mesaentrada);
            $flush = $em->flush();

//            
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Ubicacion:mesaEntrada.html.twig', [
                    'form' => $form->createView(),
                    'dependencia' => $mesaentrada->getDependencia()
        ]);
    }

}
