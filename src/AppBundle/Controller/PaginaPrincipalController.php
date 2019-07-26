<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\Persona;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Form\ExpedienteType;

class PaginaPrincipalController extends Controller {

    /**
     * @Route("/", name="inicio")
     */
    public function indexAction() {


        // replace this example code with whatever you need
        return $this->render('AppBundle:PaginaPrincipal:inicio.html.twig', [
        ]);
    }

    /**
     * @Route("/home", name="homepage")
     */
    public function homeAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('AppBundle:PaginaPrincipal:index.html.twig', [
        ]);
    }

    /**
     * @Route("/loginUsuario", name="loginUsuario")
     */
    public function loginAction(Request $request) {
        // Recupera el servicio de autenticación
        $authenticationUtils = $this->get('security.authentication_utils');

        // Recupera, si existe, el último error al intentar hacer login
        $error = $authenticationUtils->getLastAuthenticationError();

        // Recupera el último nombre de usuario introducido
        $lastUsername = $authenticationUtils->getLastUsername();

        // Renderiza la plantilla, enviándole, si existen, el último error y nombre de usuario
        return $this->render('AppBundle:PaginaPrincipal:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error,
        ));
    }

    /**
     * @Route("login_check", name="login_check")
     */
    public function loginCheckAction() {
        
    }

    /**
     * @Route("logout", name="logout")
     */
    public function logoutAction() {
        
    }

}
