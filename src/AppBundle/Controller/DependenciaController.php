<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Form\DependenciaType;
use AppBundle\Form\DependenciaFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;


class DependenciaController extends Controller {

    /**
     * @Route("/dependencia/add", name="nueva_dependencia")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = new Dependencia();
        $mesaentrada = new MesaEntrada();

        $form = $this->createForm(DependenciaType::class, $dependencia);


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $mesaentrada->setDependencia($dependencia);
            $dependencia->setMesaentrada($mesaentrada);
            $dependencia->setEstado('HABILITADO');
          //  $dependencia->setResponsable($form['responsable']);
            $mesaentrada->setCodigoExpediente($form['mesaentrada']['codigoExpediente']->getData());
            foreach ($form['mesaentrada']['responsables']->getData() as $responsable) {
                $responsable->setUbicacion($mesaentrada);
                $mesaentrada->addResponsable($responsable);
            }

            $em->persist($mesaentrada);
            $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Dependencia:add.html.twig', [
                    'form' => $form->createView(),
                    'accion'=>'Nueva'
        ]);
    }
    
    
    /**
    * @Route("dependencia/listado/{currentPage}", name="listado_dependencia")
    */
    public function listaDependenciasAction(Request $request, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();
        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $dependencias = array();
        
        $formDependenciaFilter = $this->createForm(DependenciaFilterType::class);
        $formDependenciaFilter->handleRequest($request);
        if ($formDependenciaFilter->isSubmitted() == false && $this->get('session')->get('dependencia_listar_request')) {
            $formDependenciaFilter->handleRequest($this->get('session')->get('dependencia_listar_request'));
        }

        if ($formDependenciaFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:Dependencia')->createDependenciaFilter();
            
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formDependenciaFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());
            
            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);
            
            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $dependencias = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        }
        
         if ($formDependenciaFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('dependencia_listar_request');
            return $this->redirectToRoute('listado_dependencia',['currentPage'=>1]);
         }
        
         if ($formDependenciaFilter->get('filter')->isClicked()) {           
            $dependenciaListarFilterRequest = $request->request->get('dependencia_filter');
            unset($dependenciaListarFilterRequest['filter']);

            $request->request->set('dependencia_filter', $dependenciaListarFilterRequest);
            $request->request->set('currentPage',1);
            $this->get('session')->set('dependencia_listar_request', $request);
            if($request->get('currentPage')>$maxPages)
            {
                 return $this->redirectToRoute('listado_dependencia',['currentPage'=>1]);
            }
        }
        
        return $this->render('AppBundle:Dependencia:listadoDependencia.html.twig', array(
                    'dependencias' => $dependencias,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formDependenciaFilter' => $formDependenciaFilter->createView()                  
        ));
    }

    /**
     * @Route("dependencia/archivar/{id}", name="deshabilitar_dependencia")
     */
    public function archivarAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find($id);
               
       // $em->remove($mesaentrada);
               
        $dependencia->setEstado(null);
        
        $em->persist($dependencia);
        $flush = $em->flush();

//        if ($flush == null) {
//            echo "Post se ha borrado correctamente";
//        } else {
//            echo "El post no se ha borrado";
//        }

        return $this->redirectToRoute('listado_dependencia',["currentPage"=>1]);
    }
    
    /**
     * @Route("dependencia/alta/{id}", name="alta_dependencia")
     */
    public function altaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find($id);
               
       // $em->remove($mesaentrada);
               
        $dependencia->setEstado('HABILITADO');
        
        $em->persist($dependencia);
        $flush = $em->flush();

//        if ($flush == null) {
//            echo "Post se ha borrado correctamente";
//        } else {
//            echo "El post no se ha borrado";
//        }

        return $this->redirectToRoute('listado_dependencia',["currentPage"=>1]);
    }
    
     /**
     * @Route("dependencia/edit/{id}", name="editar_dependencia")
     */
    public function editPersonaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find($id);

        $form = $this->createForm(DependenciaType::class, $dependencia,['gestion'=>'Administrador']);
        $form->handleRequest($request);
             
        if ($form->isSubmitted()) {
         
                $em->persist($dependencia);
                $em->flush();
            
            return $this->redirectToRoute('listado_dependencia',["currentPage"=>1]);

        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Dependencia:add.html.twig', array(
                    'form' => $form->createView(),
                    'accion'=>'Editar'
        ));
    }
    
}
