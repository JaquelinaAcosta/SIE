<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Expediente;

class PaginaPrincipalController extends Controller {

    /**
     * @Route("/", name="busqueda_expediente")
     */
    public function indexAction(Request $request) {

        if ($this->getUser()->getFechaBaja() == null) {
            $em = $this->getDoctrine()->getEntityManager();
            $expedientes = array();
            $expedientePadre = new Expediente();

            $formExpedienteFilter = $this->createForm(\AppBundle\Form\ExpedienteSearchFilterType::class, $expedientes);

            $formExpedienteFilter->handleRequest($request);
            if ($formExpedienteFilter->isSubmitted() == false && $this->get('session')->get('expediente_search_listar_request')) {
                $formExpedienteFilter->handleRequest($this->get('session')->get('expediente_search_listar_request'));
            }

            if ($formExpedienteFilter->isValid()) {
                $filterBuilder = $em->getRepository('AppBundle:Expediente')
                        ->createExpedienteFastFilterQuery();

                $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formExpedienteFilter, $filterBuilder);
                $expedientes = $filterBuilder->getQuery()->getResult();
                if ($expedientes[0] != null && $expedientes[0]->getEstado() == 'Asociado') {
                    $expedientePadre = $em->getRepository('AppBundle:ExpedienteAsociado')->findOneBy([
                                'expedienteAsociado' => $expedientes[0]
                            ])->getExpedientePadre();
                }
            }
            if ($formExpedienteFilter->get('Limpiar')->isClicked()) {
                $this->get('session')->remove('expediente_search_listar_request');
                return $this->redirectToRoute('busqueda_expediente');
            }

            if ($formExpedienteFilter->get('Buscar')->isClicked()) {
                $expedienteListarFilterRequest = $request->request->get('expediente_fast_filter');
                unset($expedienteListarFilterRequest['Limpiar']);
                $request->request->set('expediente_fast_filter', $expedienteListarFilterRequest);
                $this->get('session')->set('expediente_search_listar_request', $request);
//            return $this->redirectToRoute('busqueda_expediente');
            }

            return $this->render('Expediente/busqueda.html.twig', array(
                        'expedientes' => $expedientes,
                        'expediente_padre' => $expedientePadre,
                        'formExpedienteFilter' => $formExpedienteFilter->createView(),
            ));
        } else {
            return $this->redirectToRoute('logout');
        }
    }

    /**
     * @Route("/login", name="loginUsuario")
     */
    public function loginAction(Request $request) {

        // Recupera el servicio de autenticación
        $authenticationUtils = $this->get('security.authentication_utils');

        // Recupera, si existe, el último error al intentar hacer login
        $error = $authenticationUtils->getLastAuthenticationError();

        // Recupera el último nombre de usuario introducido
        $lastUsername = $authenticationUtils->getLastUsername();

        // Renderiza la plantilla, enviándole, si existen, el último error y nombre de usuario
        return $this->render('Login/index.html.twig', array(
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
