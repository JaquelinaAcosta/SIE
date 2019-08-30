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
use AppBundle\Entity\ExpedienteAsociado;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Form\ExpedienteFilterType;
use Symfony\Component\Validator\Constraints\DateTime;
use AppBundle\Entity\MovimientoExpediente;

class ExpedienteController extends Controller {

    /**
     * @Route("/add/expediente", name="nuevo_expediente")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = new Expediente();

        $movimientoExpediente = new MovimientoExpediente();
        $form = $this->createForm(ExpedienteType::class, $expediente);

        $form->handleRequest($request);

        $user = $this->getUser();
        $expediente->setIniciadorDependencia($user->getPersona()->getDependencia());
        $expediente->setUbicacionActual($expediente->getIniciadorDependencia()->getMesaentrada());
        $expediente->setUltimaUbicacion($expediente->getIniciadorDependencia()->getMesaentrada());

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $movimientoExpediente->setTipoSalida('Externo');
                $movimientoExpediente->setExpediente($expediente);
                $movimientoExpediente->setFojas($expediente->getFojas());
                $movimientoExpediente->setObservacion('Movimiento generado automaticamente en la carga del expediente en la mesa de entrada.');
                $movimientoExpediente->setComentario('Carga automática.');
                $fechaHoy = date("d-m-Y");
                $date = \DateTime::createFromFormat('d-m-Y', $fechaHoy);
                $movimientoExpediente->setFecha($date);
                $movimientoExpediente->setUbicacion($expediente->getIniciadorDependencia()->getMesaentrada());
                $expediente->getMovimientos()->add($movimientoExpediente);

                $fechaIni = \DateTime::createFromFormat('d-m-Y', $form['fechaInicio']->getData());
//                $fechaIni->format('Y-m-d');
//                dump($fechaIni);die();
                if ($form['fechaFin']->getData() != '') {
                    $fechaFin = \DateTime::createFromFormat('d-m-Y', $form['fechaFin']->getData());
                    $expediente->setFechaFin($fechaFin);
                } else {
                    $expediente->setFechaFin(null);
                }

//                $fechaFin->format('Y-m-d');
//                dump($fechaIni);die();
//                $expediente->setFechaInicio());
                $expediente->setFechaInicio($fechaIni);

                $expediente->setEstado('NUEVO');
//                foreach ($form['expedientes_asociados']->getData() as $expediente_asoc) {
//                    $expediente_asoc->setExpedientePadre($expediente);
//                }
//                $expediente->setFechaInicio(date($form['fechaInicio']->getData()." H:i:s"));
//                $expediente->setFechaFin(date($form['fechaFin']->getData()." H:i:s"));

                $em->persist($expediente);
                $flush = $em->flush();

                if ($flush == false) {
                    $this->addFlash('success', "El Expediente: " . $expediente->getCodigoExpediente() . "-" . $expediente->getNumeroExpediente() . "-" . $expediente->getDigitoExpediente() . " se agregó correctamente.");
                    return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
                } else {
                    $this->addFlash('danger', "Ocurrió un error en la creacion de Expediente.");
                }
            }
        }


        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:add.html.twig', [
                    'form' => $form->createView(),
                    'accion' => 'Nuevo'
        ]);
    }

    /**
     * @Route("expediente/listado/{currentPage}", name="listado_expediente")
     */
    public function listaExpedientesAction(Request $request, $currentPage) {
        $q = $request->query->get('modo');
        $asociado = false;
        $padre_id = null;
        if ($q != null && $q == 'asociado') {
            $asociado = true;
            $padre_id = $request->query->get('padre_id');
        }
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->getUser();
        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $expedientes = array();

        if ($this->getUser()->getRole() == 'ROLE_ADMIN') {
            $formExpedienteFilter = $this->createForm(ExpedienteFilterType::class, $expedientes, ['role' => 'ROLE_ADMIN']);
        } else {
            $formExpedienteFilter = $this->createForm(ExpedienteFilterType::class, $expedientes);
        }

        $formExpedienteFilter->handleRequest($request);
        if ($formExpedienteFilter->isSubmitted() == false && $this->get('session')->get('expediente_listar_request')) {
            $formExpedienteFilter->handleRequest($this->get('session')->get('expediente_listar_request'));
        }

        if ($formExpedienteFilter->isValid()) {
            if ($asociado == false) {
                $filterBuilder = $em->getRepository('AppBundle:Expediente')
                        ->createExpedienteFilterQuery($user);
            } else {
                $filterBuilder = $em->getRepository('AppBundle:Expediente')
                        ->createExpedienteFilterQuery($user, $padre_id);
            }


            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formExpedienteFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $expedientes = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        }

        if ($formExpedienteFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('expediente_listar_request');
            if ($asociado == false) {
                return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
            } else {
                return $this->redirectToRoute('listado_expediente', ['currentPage' => 1,
                            'modo' => 'asociado',
                            'padre_id' => $padre_id
                ]);
            }
        }

        if ($formExpedienteFilter->get('filter')->isClicked()) {
            $expedienteListarFilterRequest = $request->request->get('expediente_filter');
            unset($expedienteListarFilterRequest['filter']);
            $request->request->set('expediente_filter', $expedienteListarFilterRequest);
            $this->get('session')->set('expediente_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                if ($asociado == false) {
                    return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
                } else {
                    return $this->redirectToRoute('listado_expediente', ['currentPage' => 1,
                                'modo' => 'asociado',
                                'padre_id' => $padre_id
                    ]);
                }
            }
        }

        return $this->render('AppBundle:Expediente:listadoExpediente.html.twig', array(
                    'expediente' => $expedientes,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formExpedienteFilter' => $formExpedienteFilter->createView(),
                    'asociado' => $asociado,
                    'padre_id' => $padre_id,
                    'user' => $user
        ));
    }

    /**
     * @Route("expediente/view/{id}", name="ver_expediente")
     */
    public function expedienteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser(), true)) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        $expedientePadre = new Expediente();
        $actualFecha = '';
        $ultimaFecha = '';

        if ($expediente->getEstado() == 'ASOCIADO') {
            $expedientePadre = $em->getRepository('AppBundle:ExpedienteAsociado')->findOneBy([
                        'expedienteAsociado' => $expediente
                    ])->getExpedientePadre();
        }
        if ($expediente != null) {
            $actualFecha = $em->getRepository('AppBundle:MovimientoExpediente')->findOneBy(
                            [
                        'ubicacion' => $expediente->getUbicacionActual()
                            ], ['fecha' => 'DESC'], ['expediente' => $expediente])->getFecha()->format('d-m-Y');
            $ultimaFecha = $em->getRepository('AppBundle:MovimientoExpediente')->findOneBy(
                            [
                        'ubicacion' => $expediente->getUltimaUbicacion()
                            ], ['fecha' => 'DESC'], ['expediente' => $expediente])->getFecha()->format('d-m-Y');
        }

        $expedientes_asociados = $em->getRepository('AppBundle:ExpedienteAsociado')->findBy([
            'expedienteAsociado' => $expediente->getId()]);
        if ($expediente->getEstado() != 'ASOCIADO') {
            $expediente->setEstado('VISTO');
        }



        $em->persist($expediente);
        $em->flush();

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:detalleExpediente.html.twig', [
                    'expediente' => $expediente,
                    'expedientes_asociados' => $expedientes_asociados,
                    'expediente_padre' => $expedientePadre,
                    'actual_fecha' => $actualFecha,
                    'ultima_fecha' => $ultimaFecha,
        ]);
    }

    /**
     * @Route("expediente/delete/{id}", name="eliminar_expediente")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $fechaBaja = \DateTime::createFromFormat('d-m-Y', date('d-m-Y'));

        $expediente->setFechaBaja($fechaBaja);

        $em->persist($expediente);
        $flush = $em->flush();

        if ($flush == false) {
            $this->addFlash('success', "El Expediente: " . $expediente . " se eliminó correctamente.");
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        } else {
            $this->addFlash('danger', "Ocurrió un error en la Eliminacón de Expediente.");
        }

        return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
    }

    /**
     * @Route("expediente/alta/{id}", name="alta_expediente")
     */
    public function altaAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        if ($this->getUser()->getRole() != 'ROLE_ADMIN') {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        $expediente->setFechaBaja(null);
        $expediente->setEstado('NUEVO');

        $em->persist($expediente);
        $flush = $em->flush();

        if ($flush == false) {
            $this->addFlash('success', "El Expediente: " . $expediente . " se dio de alta correctamente.");
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        } else {
            $this->addFlash('danger', "Ocurrió un error en el alta del Expediente.");
        }

        return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
    }

    /**
     * @Route("expediente/editar/{id}", name="editar_expediente")
     */
    public function editAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
         if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        
        
        //SI NO SE HACE EL FORMAT TIRA ERROR DE OBJETO TIPO DATETIME
        $expediente->setFechaInicio($expediente->getFechaInicio()->format('d-m-Y'));
        IF ($expediente->getFechaFin() != null) {
            $expediente->setFechaFin($expediente->getFechaFin()->format('d-m-Y'));
        }


        $form = $this->createForm(ExpedienteType::class, $expediente);
        $user = $this->getUser();


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $fechaIni = \DateTime::createFromFormat('d-m-Y', $form['fechaInicio']->getData());
                $fechaFin = \DateTime::createFromFormat('d-m-Y', $form['fechaFin']->getData());
                $expediente->setFechaInicio($fechaIni);
                $expediente->setFechaFin($fechaFin);

                $em->persist($expediente);
                $flush = $em->flush();

                if ($flush == false) {
                    $this->addFlash('success', "El Expediente: " . $expediente->getCodigoExpediente() . "-" . $expediente->getNumeroExpediente() . "-" . $expediente->getDigitoExpediente() . " se modificó correctamente.");
                    return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
                } else {
                    $this->addFlash('danger', "Ocurrió un error en la Modificación de Expediente.");
                }
            }
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Expediente:add.html.twig', array(
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'accion' => 'Editar'
        ));
    }

}
