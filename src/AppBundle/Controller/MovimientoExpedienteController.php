<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\MovimientoExpediente;
use AppBundle\Entity\Expediente;
use AppBundle\Form\MovimientoExpedienteFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Form\MovimientoExpedienteType;

class MovimientoExpedienteController extends Controller {

    /**
     * @Route("/expediente/add/movimiento/{id}", name="elegir_movimiento")
     */
    public function indexMovimientoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->findByExpediente($id);
        
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $pase_externo = false;

        if ($this->getUser()->getRole() == 'ROLE_RESPONSABLE') {
            if (get_class($expediente->getUbicacionActual()) == \AppBundle\Entity\MesaEntrada::class) {
                $pase_externo = true;
            }
        }
        if ($this->getUser()->getRole() == 'ROLE_USER') {
            if (get_class($expediente->getUbicacionActual()) != \AppBundle\Entity\MesaEntrada::class) {
                $pase_externo = true;
            }
        }


        $form = $this->createForm(MovimientoExpedienteType::class);
        $form->handleRequest($request);

        return $this->render('Movimiento/chooser.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'pase_externo' => $pase_externo
        ]);
    }

    /**
     * @Route("/expediente/add/movimiento/interno/{id}", name="movimiento_interno")
     */
    public function internoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = $em->getRepository("AppBundle:Expediente")->findByExpediente($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $form = $this->createForm(MovimientoExpedienteType::class, $movimientoExpediente, ['pase' => 'interno']);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $persona = $form['persona']->getData();
                $movimientoExpediente->setTipoSalida('Interno');
                $movimientoExpediente->setExpediente($expediente);
                $movimientoExpediente->setFecha(new \DateTime('now'));
                $movimientoExpediente->setUbicacion($persona);
                foreach ($expediente->getExpedientesAsociados()->getValues() as $expediente_asoc) {
                    $expediente_asoc->getExpedienteAsociado()->setUltimaUbicacion($expediente_asoc
                                    ->getExpedienteAsociado()->getUbicacionActual());
                    $expediente_asoc->getExpedienteAsociado()->setUbicacionActual($persona);
                }
                $expediente->getMovimientos()->add($movimientoExpediente);
                $expediente->setUltimaUbicacion($expediente->getUbicacionActual());
                $expediente->setUbicacionActual($persona);
                $flush = $em->flush();
                if ($flush == false) {
                    $this->addFlash('success', 'Pase hacia "' . $persona . '" exitoso.');
                } else {
                    $this->addFlash('danger', 'Ocurrio un error en el pase hacia "' . $persona . '"');
                }
                return $this->redirectToRoute('listado_movimiento', ['id' => $expediente->getId(),
                            'currentPage' => 1]);
            }
        }
        return $this->render('Movimiento/interno.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'accion' => 'NUEVO'
        ]);
    }

    /**
     * @Route("/expediente/add/movimiento/externo/{id}", name="movimiento_externo")
     */
    public function externoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = $em->getRepository("AppBundle:Expediente")->findByExpediente($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $user = $this->getUser();

        if (get_class($expediente->getUbicacionActual()) == \AppBundle\Entity\MesaEntrada::class) {
            $form = $this->createForm(MovimientoExpedienteType::class, $movimientoExpediente, ['pase' => 'externo',
                'dependencia_id' => $expediente->getUbicacionActual()->getDependencia()]);
        } else {
            $form = $this->createForm(MovimientoExpedienteType::class, $movimientoExpediente, ['pase' => 'externo',
                'dependencia_id' => $user->getPersona()->getDependencia()->getId()]);
        }
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $mesaentrada = $em->getRepository("AppBundle:Dependencia")
                                ->findByDependencia($form['mesaentrada']->getData()->getDependencia())
                                ->getMesaentrada();
                $movimientoExpediente->setTipoSalida('Externo');
                $movimientoExpediente->setExpediente($expediente);
                $movimientoExpediente->setFecha(new \DateTime('now'));
                $movimientoExpediente->setUbicacion($mesaentrada);
                foreach ($expediente->getExpedientesAsociados()->getValues() as $expediente_asoc) {
                    $expediente_asoc->getExpedienteAsociado()->setUltimaUbicacion($expediente_asoc
                                    ->getExpedienteAsociado()->getUbicacionActual());
                    $expediente_asoc->getExpedienteAsociado()->setUbicacionActual($mesaentrada);
                }
                $expediente->getMovimientos()->add($movimientoExpediente);
                $expediente->setUltimaUbicacion($expediente->getUbicacionActual());
                $expediente->setUbicacionActual($mesaentrada);
                if ($expediente->getUltimaUbicacion()->getDependencia() != $expediente->getUbicacionActual()->getDependencia()) {
                    $expediente->setEstado('NUEVO');
                }
                $em->persist($expediente);
                $flush = $em->flush();

                if ($flush == false) {
                    $this->addFlash('success', 'Pase hacia "' . $mesaentrada->getDependencia() . '" exitoso.');
                } else {
                    $this->addFlash('danger', 'Ocurrio un error en el pase hacia "' . $mesaentrada->getDependencia()) . '"';
                }

                return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
            }
        }
        return $this->render('Movimiento/externo.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'accion' => 'NUEVO'
        ]);
    }

    /**
     * @Route("/expediente/add/movimiento/archivado/{id}", name="movimiento_archivado")
     */
    public function archivadoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = $em->getRepository("AppBundle:Expediente")->findByExpediente($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $form = $this->createForm(MovimientoExpedienteType::class, $movimientoExpediente, ['pase' => 'archivar',
            'dependencia_id' => $this->getUser()->getPersona()->getDependencia()]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->findByLugar($form['lugarfisico']['tipo']->getData()->getId());
                $movimientoExpediente->setTipoSalida('Archivado');
                $movimientoExpediente->setExpediente($expediente);
                $movimientoExpediente->setFecha(new \DateTime('now'));
                $movimientoExpediente->setUbicacion($lugarfisico);
                foreach ($expediente->getExpedientesAsociados()->getValues() as $expediente_asoc) {

                    $expediente_asoc->getExpedienteAsociado()->setUltimaUbicacion($expediente_asoc
                                    ->getExpedienteAsociado()->getUbicacionActual());
                    $expediente_asoc->getExpedienteAsociado()->setUbicacionActual($lugarfisico);
                }

                $expediente->getMovimientos()->add($movimientoExpediente);
                $expediente->setUltimaUbicacion($expediente->getUbicacionActual());
                $expediente->setUbicacionActual($lugarfisico);
                $em->persist($expediente);
                $flush = $em->flush();
                if ($flush == false) {
                    $this->addFlash('success', 'Pase hacia "' . $lugarfisico . '" exitoso.');
                } else {
                    $this->addFlash('danger', 'Ocurrio un error en el pase hacia "' . $lugarfisico . '"');
                }


                return $this->redirectToRoute('listado_movimiento', ['id' => $expediente->getId(), 'currentPage' => 1]);
            }
        }
        return $this->render('Movimiento/archivar.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'accion' => 'NUEVO'
        ]);
    }

    /**
     * @Route("expediente/{id}/movimiento/listado/{currentPage}", name="listado_movimiento")
     */
    public function listaMovimientoAction(Request $request, $id, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->findByExpediente($id);
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser(),true)) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $user = $this->getUser();
        $limit = 15;
        $totalItems = 0;
        $totalMovimientos = count($expediente->getMovimientos()->getValues());
        $maxPages = 0;
        $movimientos = array();



        $formMovimientoFilter = $this->createForm(MovimientoExpedienteFilterType::class);
        $formMovimientoFilter->handleRequest($request);
        if ($formMovimientoFilter->isSubmitted() == false && $this->get('session')->get('movimiento_listar_request')) {
            $formMovimientoFilter->handleRequest($this->get('session')->get('movimiento_listar_request'));
        }

        if ($formMovimientoFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:MovimientoExpediente')
                    ->createMovimientoFilter($expediente);

            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formMovimientoFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $movimientos = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
        }else {
            $movimientos_repo = $em->getRepository('AppBundle:MovimientoExpediente')
                    ->createMovimientoFilter($expediente);
            $totalItems = count($movimientos_repo->getQuery()->getResult());
            $movimientos_repo->setFirstResult($limit * (1 - 1));
            $movimientos_repo->setMaxResults($limit);
            $paginator = new Paginator($movimientos_repo, $fetchJoinCollection = true);
            $movimientos = $paginator->getQuery()->getResult();
            $maxPages = ($movimientos > 0) ? $maxPages = ceil($totalItems / $limit): $maxPages=1;
        }

        if ($formMovimientoFilter->get('reset')->isClicked()) {
            $this->get('session')->remove('movimiento_listar_request');
            return $this->redirectToRoute('listado_movimiento', ['id' => $expediente->getId(), 'currentPage' => 1]);
        }

        if ($formMovimientoFilter->get('filter')->isClicked()) {
            $movimientoListarFilterRequest = $request->request->get('movimiento_filter');
            unset($movimientoListarFilterRequest['filter']);
            $request->request->set('movimiento_filter', $movimientoListarFilterRequest);
            $this->get('session')->set('movimiento_listar_request', $request);
            if ($request->get('currentPage') > $maxPages) {
                return $this->redirectToRoute('listado_movimiento', ['id' => $expediente->getId(), 'currentPage' => 1]);
            }
        }

        return $this->render('Expediente/listadoMovimientos.html.twig', array(
                    'limite'=>$limit,
                    'movimientos' => $movimientos,
                    'totalMovimientos' => $totalMovimientos,
                    'expediente' => $expediente,
                    'maxPages' => $maxPages,
                    'totalItems' => $totalItems,
                    'thisPage' => $currentPage,
                    'page' => $currentPage,
                    'formMovimientoFilter' => $formMovimientoFilter->createView()
        ));
    }

    /**
     * @Route("expediente/{id}/movimiento/detalle", name="ver_movimiento")
     */
    public function verMovimientoAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $movimiento = $em->getRepository("AppBundle:MovimientoExpediente")->findByMovimiento($id);
        if (!$this->get("app.util")->VerificarExpediente($movimiento->getExpediente(),
                $this->getUser(),true)) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        // replace this example code with whatever you need
        return $this->render('Movimiento/detalleMovimiento.html.twig', [
                    'movimiento' => $movimiento
        ]);
    }

    /**
     * @Route("expediente/movimiento/editar/{id}", name="editar_movimiento")
     */
    public function editMovimientoAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $movimiento = $em->getRepository("AppBundle:MovimientoExpediente")->findByMovimiento($id);
        $expediente = $movimiento->getExpediente();
        if (!$this->get("app.util")->VerificarExpediente($expediente, $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }

        switch ($movimiento->getTipoSalida()) {
            case ('Externo'):
                $movimiento->setMesaentrada($movimiento->getUbicacion());
                $form = $this->createForm(MovimientoExpedienteType::class, $movimiento, ['pase' => 'externo',
                    'dependencia_id'=>$this->getUser()->getPersona()->getDependencia()]);
                $form->handleRequest($request);

                if ($form->isSubmitted()) {
                    $movimiento->setUbicacion($form['mesaentrada']->getData());
                    $expediente->setUbicacionActual($movimiento->getUbicacion());
                    $em->persist($expediente);
                    $flush = $em->flush();
                    if ($flush == false) {
                        $this->addFlash('success', 'Pase "' . $movimiento->getUbicacion() . '" editado correctamente.');
                    } else {
                        $this->addFlash('danger', 'Ocurrio al intentar editar el pase "' . $movimento->getUbicacion()) . '"';
                    }
                    return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
                }
                return $this->render('Movimiento/externo.html.twig', array(
                            'movimiento' => $movimiento,
                            'expediente' => $expediente,
                            'form' => $form->createView(),
                            'accion' => 'Editar'
                ));
                break;

            case('Interno'):
                $movimiento->setPersona($movimiento->getUbicacion());
                $form = $this->createForm(MovimientoExpedienteType::class, $movimiento, ['pase' => 'interno']);

                $form->handleRequest($request);
                if ($form->isSubmitted()) {
                    $movimiento->setUbicacion($form['persona']->getData());
                    $expediente->setUbicacionActual($movimiento->getUbicacion());
                    $em->persist($expediente);

                    $flush = $em->flush();
                    if ($flush == false) {
                        $this->addFlash('success', 'Pase "' . $movimiento->getUbicacion() . '" editado correctamente.');
                    } else {
                        $this->addFlash('danger', 'Ocurrio al intentar editar el pase "' . $movimento->getUbicacion()) . '"';
                    }
                    return $this->redirectToRoute('listado_movimiento', ["id" => $movimiento->getExpediente()->getId(), 'currentPage' => 1]);
                }
                return $this->render('Movimiento/interno.html.twig', array(
                            'movimiento' => $movimiento,
                            'expediente' => $expediente,
                            'form' => $form->createView(),
                            'accion' => 'Editar'
                ));
                break;

            case('Archivado'):
                $movimiento->setLugarfisico($movimiento->getUbicacion());
                $form = $this->createForm(MovimientoExpedienteType::class, $movimiento, ['pase' => 'archivar', 'dependencia_id' => $this->getUser()
                            ->getPersona()->getDependencia()
                            ->getId()]);
                $form->handleRequest($request);

                if ($form->isSubmitted()) {
                    $movimiento->setUbicacion($form['lugarfisico']->getData());
                    $expediente->setUbicacionActual($movimiento->getUbicacion());
                    $em->persist($expediente);
                    $flush = $em->flush();
                    if ($flush == false) {
                        $this->addFlash('success', 'Pase "' . $movimiento->getUbicacion() . '" editado correctamente.');
                    } else {
                        $this->addFlash('danger', 'Ocurrio al intentar editar el pase "' . $movimento->getUbicacion()) . '"';
                    }
                    return $this->redirectToRoute('listado_movimiento', ["id" => $movimiento->getExpediente()->getId(), 'currentPage' => 1]);
                }
                return $this->render('Movimiento/archivar.html.twig', array(
                            'movimiento' => $movimiento,
                            'expediente' => $expediente,
                            'form' => $form->createView(),
                            'accion' => 'Editar'
                ));
                break;

            default:
                break;
        }
        return $this->render('Movimiento/detalleMovimiento.html.twig', array(
                    'form' => $form->createView(),
                    'accion' => 'Editar'
        ));
    }

    /**
     * @Route("expediente/movimiento/eliminar/{id}", name="eliminar_movimiento")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $movimiento = $em->getRepository("AppBundle:MovimientoExpediente")->findByMovimiento($id);
        if (!$this->get("app.util")->VerificarExpediente($movimiento->getExpediente(), $this->getUser())) {
            $this->addFlash('danger', 'Usted no tiene acceso a este expediente.');
            return $this->redirectToRoute('listado_expediente', ['currentPage' => 1]);
        }
        $movimiento->getExpediente()->setUbicacionActual($movimiento->getExpediente()->getUltimaUbicacion());
        $movimiento->setFechaBaja(new \DateTime('now'));
         $this->get('session')->remove('movimiento_listar_request');
        $flush = $em->flush();
        if ($flush == false) {
            $this->addFlash('success', 'Pase "' . $movimiento->getUbicacion() . '" eliminado correctamente.');
        } else {
            $this->addFlash('danger', 'Ocurrio al intentar eliminar el pase "' . $movimento->getUbicacion()) . '"';
        }

        return $this->redirectToRoute('listado_movimiento', ["id" => $movimiento->getExpediente()->getId(), 'currentPage' => 1]);
    }

}
