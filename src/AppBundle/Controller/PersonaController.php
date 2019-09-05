<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Persona;
use AppBundle\Entity\Dependencia;
use AppBundle\Form\PersonaType;
use AppBundle\Form\PersonaFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Common\Collections\ArrayCollection;

class PersonaController extends Controller {

    /**
     * @Route("/persona/add", name="nueva_persona")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $persona = new Persona();
        $user = $this->getUser();
        if ($user->getRole() == 'ROLE_ADMIN') {
            $form = $this->createForm(PersonaType::class, $persona, [
                'movimiento_persona' => null,
                'role' => 'su']);
        } else {
            $form = $this->createForm(PersonaType::class, $persona);
        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $dependencia = $form['dependencia']->getData();
            $persona->setDependencia($dependencia);

            //formato para ingreso de texto
            $persona->setNombre(trim(strtoupper($persona->getNombre())));
            $persona->setApellido(trim(strtoupper($persona->getApellido())));
            $persona->setCargo(trim(strtoupper($persona->getCargo())));
            //fin formato

            $em->persist($persona);
            $flush = $em->flush();

            if ($flush == false) {
                $this->addFlash('success', "La persona " . $persona->getnombre() . " " . $persona->getapellido() . " se agregó correctamente.");
                return $this->redirectToRoute('listado_persona', ["currentPage" => 1]);
            } else {
                $this->addFlash('danger', "Ocurrió un error en la creacion de persona.");
            }
        }

        // replace this example code with whatever you need
        return $this->render('Ubicacion/persona.html.twig', [
                    'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/persona/edit/{id}", name="editar_persona")
     */
    public function editPersonaAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $persona = $em->getRepository("AppBundle:Persona")->find($id);
        if (!$this->get("app.util")->VerificarPersona($persona, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a esta persona.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $user = $this->getUser();
        $persona->setUsuario($user);
        if ($user->getRole() == 'ROLE_ADMIN') {
            $form = $this->createForm(PersonaType::class, $persona, [
                'movimiento_persona' => null,
                'role' => 'su']);
        } else {
            $form = $this->createForm(PersonaType::class, $persona);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($persona);
                $flush = $em->flush();
                if ($flush == false) {
                    $this->addFlash('success', "La persona " . $persona->getnombre() . " " . $persona->getapellido() . " se modificó correctamente.");
                    return $this->redirectToRoute('listado_persona', ["currentPage" => 1]);
                } else {
                    $this->addFlash('danger', "Ocurrió un error en la modificación de persona.");
                }
            }
        }


        // replace this example code with whatever you need
        return $this->render('Ubicacion/editarPersona.html.twig', array(
                    'form' => $form->createView(),
                    'persona' => $persona,
        ));
    }

    /**
     * @Route("/persona/listado/{currentPage}", name="listado_persona")
     */
    public function listaPersonaAction(Request $request, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();

        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $personas = array();

        $formPersonaFilter = $this->createForm(PersonaFilterType::class);
        $formPersonaFilter->handleRequest($request);
        if ($formPersonaFilter->isSubmitted() == false && $this->get('session')->get('persona_listar_request')) {
            $formPersonaFilter->handleRequest($this->get('session')->get('persona_listar_request'));
        }

        if ($formPersonaFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:Persona')->createPersonaFilter();

            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formPersonaFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $personas = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        }

        if ($formPersonaFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('persona_listar_request');
            return $this->redirectToRoute('listado_persona', ['currentPage' => 1]);
        }

        if ($formPersonaFilter->get('filter')->isClicked()) {
            $personaListarFilterRequest = $request->request->get('persona_filter');
            unset($personaListarFilterRequest['filter']);

            $request->request->set('persona_filter', $personaListarFilterRequest);
            $request->request->set('currentPage', 1);
            $this->get('session')->set('persona_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_persona', ['currentPage' => 1]);
            }
        }

        return $this->render('Ubicacion/listadoPersona.html.twig', array(
                    'personas' => $personas,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formPersonaFilter' => $formPersonaFilter->createView()
        ));
    }

    /**
     * @Route("persona/delete/{id}", name="eliminar_persona")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $persona = $em->getRepository("AppBundle:Ubicacion")->find($id);
        if (!$this->get("app.util")->VerificarPersona($persona, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a esta persona.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        
        
       foreach ($persona->getResponsables() as $responsable) {
            $em->remove($responsable);

        }
        
        
//         dump($persona);
//         die();

        $em->remove($persona);
        $flush = $em->flush();

        if ($flush == false) {
            $this->addFlash('success', "La persona " . $persona->getnombre() . " " . $persona->getapellido() . " se eliminó correctamente.");
            return $this->redirectToRoute('listado_persona', ["currentPage" => 1]);
        } else {
            $this->addFlash('danger', "Ocurrió un error ");
        }
        if ($persona->getUsuario()!=null){
        return $this->redirectToRoute('eliminar_usuario', ["id" => $persona->getUsuario(), 'modo'=>'borrar']);
        } else{
          return $this->redirectToRoute('listado_persona', ["currentPage" => 1]);

        }
    }

    /**
     * @Route("/gestionar/persona_responsbles/{id}", name="gestionar_persona_responsables")
     */
    public function personaGestionarResponsblesAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $persona = $em->getRepository("AppBundle:Persona")->find($id);
        if (!$this->get("app.util")->VerificarPersona($persona, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a esta persona.');
            return $this->redirectToRoute('busqueda_expediente');
        }
        $original_responsables = new ArrayCollection();

        $form = $this->createForm(\AppBundle\Form\PersonaResponsablesType::class, $persona, ['dependencia_id' => $persona->getDependencia()->getId()]);

        foreach ($persona->getResponsables() as $responsable) {
            $original_responsables->add($responsable);
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            foreach ($original_responsables as $responsable) {
                if (false === $persona->getResponsables()->contains($responsable)) {
                    $em->remove($responsable);
                }
            }

            foreach ($form['responsables']->getData() as $responsable) {
                $responsable->setUbicacion($persona);
                //$mesaentrada->addResponsable($responsable);
            }

            $em->persist($persona);
            $flush = $em->flush();
        }

        // replace this example code with whatever you need
        return $this->render('Ubicacion/personaResponsables.html.twig', [
                    'form' => $form->createView(),
                    'persona' => $persona
        ]);
    }

}
