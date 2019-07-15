<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Dependencia;
use AppBundle\Form\ExpedienteType;

class PaginaPrincipalController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
       
        // replace this example code with whatever you need
        return $this->render('AppBundle:PaginaPrincipal:index.html.twig', [
        ]);
    }
  
    
    /**
     * @Route("/loginUsuario", name="loginUsuario")
     */
    public function loginAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager(); 
        $usuario = $em->getRepository("AppBundle:Usuario")->findAll();
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:PaginaPrincipal:login.html.twig', [
            'usuario'=> $usuario 
        ]);
    }
}
