<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Dependencia;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Form\DependenciaType;


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
            $dependencia->setArchivado('NO');
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
     * @Route("dependencia/listado", name="listado_dependencia")
     */
    public function listaDependenciasAction(Request $request) {

        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->getUser();
        $dependencias = new Dependencia();

        if ($user->getRole() == "ROLE_ADMIN") {
            $dependencias = $em->getRepository("AppBundle:Dependencia")->findAll();
        } else {
            $this->redirectToRoute('homepage');
        }


        // replace this example code with whatever you need
        return $this->render('AppBundle:Dependencia:listadoDependencia.html.twig', [
                    'dependencias' => $dependencias
        ]);
    }

    /**
     * @Route("dependencia/archivar/{id}", name="archivar_dependencia")
     */
    public function archivarAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find($id);
               
       // $em->remove($mesaentrada);
               
        $dependencia->setArchivado('SI');
        
        $em->persist($dependencia);
        $flush = $em->flush();

//        if ($flush == null) {
//            echo "Post se ha borrado correctamente";
//        } else {
//            echo "El post no se ha borrado";
//        }

        return $this->redirectToRoute('listado_dependencia');
    }
    
    /**
     * @Route("dependencia/alta/{id}", name="alta_dependencia")
     */
    public function altaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $dependencia = $em->getRepository("AppBundle:Dependencia")->find($id);
               
       // $em->remove($mesaentrada);
               
        $dependencia->setArchivado('NO');
        
        $em->persist($dependencia);
        $flush = $em->flush();

//        if ($flush == null) {
//            echo "Post se ha borrado correctamente";
//        } else {
//            echo "El post no se ha borrado";
//        }

        return $this->redirectToRoute('listado_dependencia');
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
            
            return $this->redirectToRoute('listado_dependencia');

        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Dependencia:add.html.twig', array(
                    'form' => $form->createView(),
                    'accion'=>'Editar'
        ));
    }
    
}
