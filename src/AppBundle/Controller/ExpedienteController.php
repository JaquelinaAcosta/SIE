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
                            
                return $this->redirectToRoute('listaExpediente');
        }


        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:add.html.twig', [
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
    
    
    /**
     * @Route("/listaExpediente", name="listaExpediente")
     */
    public function listaExpedientesAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getEntityManager(); 
        $expediente = $em->getRepository("AppBundle:Expediente")->findAll();
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:listadoExpediente.html.twig', [
            'expediente'=> $expediente 
        ]);
    }
    
    
    /**
     * @Route("expediente/{id}", name="expediente")
     */
    public function expedienteAction(Request $request,$id)
    {
        
        $em = $this->getDoctrine()->getEntityManager(); 
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:detalleExpediente.html.twig', [
            'expediente'=> $expediente 
        ]);
    }
    
    /**
     * @Route("delete/{id}", name="delete")
     */
    public function deleteAction(Request $request,$id)
    {
        
        $em = $this->getDoctrine()->getEntityManager(); 
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        
        // replace this example code with whatever you need
        if (!$expediente) {
            throw $this->createNotFoundException('No element found for id '.$id);
        }

        $em->remove($expediente);
        $em->flush();

        return $this->redirectToRoute('listaExpediente');
    }
    
    /**
     * @Route("edit/{id}", name="edit")
     */
    public function editAction(Request $request,$id)
    {
        
        $em = $this->getDoctrine()->getEntityManager(); 
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);    
        
        $form = $this->createForm(ExpedienteType::class,$expediente);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
                if ($form->isValid()) {
                                 
                    $em->persist($expediente);
                    $flush=$em->flush();
                   
            }
        
            return $this->redirectToRoute('listaExpediente');
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:edit.html.twig', array(
            'form'=> $form->createView(),
            'expediente'=>$expediente
        ));
    

        
    }

    
}
