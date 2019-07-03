<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\MovimientoExpediente;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\Ubicacion;
use AppBundle\Entity\Persona;
use AppBundle\Entity\Expediente;

use AppBundle\Form\MovimientoExpedienteType;


class MovimientoExpedienteController extends Controller
{
    /**
     * @Route("/expediente/movimientoExpediente", name="moverExpediente")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find(3);
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = new Expediente();
        $expediente= $em->getRepository("AppBundle:Expediente")->find(1);
        //no se is la ubicacion hay que traerla o llevarla a la base de datos;
        

        $movimientoExpediente->setExpediente($expediente);
        
 
        
        $persona = new Persona();
        $persona->setDependencia($dependencia);
        $persona->setApellido("Gomez");
        $persona->setNombre("Juan");
        $persona->setDni("12345678");
        $persona->setCargo("nada");
        
        $movimientoExpediente->setUsuario("admin");
        
        //$movimientoExpediente->setDependencia($dependencia);
        
        $form = $this->createForm(MovimientoExpedienteType::class,$movimientoExpediente);
        

       
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $em->persist($movimientoExpediente);
            $em->flush();
        }
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:MovimientoExpediente:index.html.twig', [
            'form'=> $form->createView() 
        ]);
    }
}
