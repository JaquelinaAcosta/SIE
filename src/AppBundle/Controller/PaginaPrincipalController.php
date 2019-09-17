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

        if($this->getUser()->getRole() == 'ROLE_SUPERVISOR'){
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        if($this->getUser() == null){
            return $this->redirectToRoute('loginUsuario');
        }
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

                            if(count($expedientes)>0){
                 $this->addFlash('success','Expediente encontrado satisfactoriamente.');
             }else{
                $this->addFlash('danger','El Expediente fue mal ingresado o no existe.');
             }


                if (count($expedientes)>0 && $expedientes[0]->getEstado() == 'ASOCIADO') {
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

             if(count($expedientes)>0){
                 $action = 'hide';

             }else{
                $action ='show';

             }


            return $this->render('Expediente/busqueda.html.twig', array(
                        'expedientes' => $expedientes,
                        'expediente_padre' => $expedientePadre,
                        'formExpedienteFilter' => $formExpedienteFilter->createView(),
                        'action'=>$action
            ));
        } else {
              
            return $this->redirectToRoute ('loginUsuario');
           
        }
    }

    /**
     * @Route("/login", name="loginUsuario")
     */
    public function loginAction(Request $request) {

        if($this->getUser()!= null){
            return $this->redirectToRoute('busqueda_expediente');
        }

        // Recupera el servicio de autenticación
        $authenticationUtils = $this->get('security.authentication_utils');

        // Recupera, si existe, el último error al intentar hacer login
        $error = $authenticationUtils->getLastAuthenticationError();

        // Recupera el último nombre de usuario introducido
        $lastUsername = $authenticationUtils->getLastUsername();

        if($error != null){
            $this->addFlash('danger', "El ingreso de usuario o contraseña es incorrecto.");   
        }
        

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
