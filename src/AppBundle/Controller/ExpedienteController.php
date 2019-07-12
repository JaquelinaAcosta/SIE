<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Persona;
use AppBundle\Entity\Tema;
use AppBundle\Form\ExpedienteType;
use \AppBundle\Entity\MesaEntrada;

class ExpedienteController extends Controller
{
    /**
     * @Route("/add/expediente", name="nuevoExpediente")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $expediente = new Expediente();     
        $ubicacionMesa = new MesaEntrada();
        
        $form = $this->createForm(ExpedienteType::class,$expediente);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
                if ($form->isValid()) {
                $em->persist($expediente);
                $em->flush();
            }
        }


        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:index.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
    
     /**
     * @Route("/ajax-form", name="add_evento")
     */
    public function ajaxFormAction(Request $request)
    {    
        $form = $this->createForm(ExpedienteType::class);
        $form->handleRequest($request);
        
        
        return $this->render('AppBundle:Expediente:index.html.twig', [
            'form'=> $form->createView() 
        ]);
    }

    
}
