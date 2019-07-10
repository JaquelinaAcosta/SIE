<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Dependencia;

use AppBundle\Form\ExpedienteType;

class ExpedienteController extends Controller
{
    /**
     * @Route("/add/expediente", name="nuevoExpediente")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $expediente = new Expediente();
        $tema = $em->getRepository("AppBundle:Tema")->find(3);
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find(3);

        $expediente->setTema($tema);
        $expediente->setFojas(3);
        
        $form = $this->createForm(ExpedienteType::class,$expediente);
                $expediente->setIniciadorDependencia($dependencia);
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em->persist($expediente);
            $em->flush();
        }
        
        // replace this example code with whatever you need
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

        return $this->redirectToRoute('listaExpediente'
//                , [
//            'expediente'=> $expediente  ]
                );
    }
}
