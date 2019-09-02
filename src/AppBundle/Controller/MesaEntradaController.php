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
     * @Route("/adm/gestionar/mesa_entrada/{id}", name="adm_gestionar_mesaentrada")
     */
    public function admGestionarAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $mesaentrada = $em->getRepository("AppBundle:Dependencia")->find($id)->getMesaentrada();

        $original_responsables = new ArrayCollection();

        $form = $this->createForm(MesaEntradaType::class, $mesaentrada, ['gestion' => true,
            'dependencia_id' => $mesaentrada->getDependencia()->getId()]);

        foreach ($mesaentrada->getResponsables() as $responsable) {
            $original_responsables->add($responsable);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($original_responsables as $responsable) {
                if (false === $mesaentrada->getResponsables()->contains($responsable)) {
                    $em->remove($responsable);
                } else {
                    $responsable->getUsuario()->setRole('ROLE_RESPONSABLE');
                }
            }
            foreach ($form['responsables']->getData() as $responsable) {
                $responsable->setUbicacion($mesaentrada);
            }

            $em->persist($mesaentrada);
            $flush = $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('Ubicacion/mesaEntrada.html.twig', [
                    'form' => $form->createView(),
                    'dependencia' => $mesaentrada->getDependencia()
        ]);
    }

}
