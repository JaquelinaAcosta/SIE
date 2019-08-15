<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\MovimientoExpediente;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Ubicacion;
use AppBundle\Form\MovimientoExpedienteFilterType;
use Doctrine\ORM\Tools\Pagination\Paginator;
use AppBundle\Form\MovimientoExpedienteType;
use Doctrine\Common\Collections\ArrayCollection;

class MovimientoExpedienteController extends Controller {

    /**
     * @Route("/expediente/{id}/add/movimiento", name="elegir_movimiento")
     */
    public function indexMovimientoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        $pase_externo = false;

        if($this->getUser()->getRole() == 'ROLE_RESPONSABLE') {
            if (get_class($expediente->getUbicacionActual()) == \AppBundle\Entity\MesaEntrada::class) {
                $pase_externo = true;
            }
        }



        $form = $this->createForm(MovimientoExpedienteType::class);
        $form->handleRequest($request);

        return $this->render('AppBundle:Movimiento:chooser.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente,
                    'pase_externo'=>$pase_externo
        ]);
    }

    /**
     * @Route("/expediente/{id}/add/movimiento/interno", name="movimiento_interno")
     */
    public function internoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $form = $this->createForm(MovimientoExpedienteType::class,
                $movimientoExpediente, ['pase' => 'interno']);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $persona = $em->getRepository("AppBundle:Persona")
                        ->find($form['persona']['nombre']->getData()->getId());
                $movimientoExpediente->setTipoSalida('Interno');
                $movimientoExpediente->setExpediente($expediente);
                $fechaHoy = date("d-m-Y");
                $date = \DateTime::createFromFormat('d-m-Y', $fechaHoy);
                $movimientoExpediente->setFecha($date);
                $movimientoExpediente->setUbicacion($persona);

                $expediente->getMovimientos()->add($movimientoExpediente);
                $expediente->setUbicacionActual($persona);
                $em->flush();

                $this->addFlash('success', 'Pase hacia ' . $persona . ' exitoso.');

                return $this->redirectToRoute('listado_movimiento',
                                ['id' => $expediente->getId(),
                                    'currentPage' => 1]);
            }
        }
        return $this->render('AppBundle:Movimiento:interno.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }

    /**
     * @Route("/expediente/{id}/add/movimiento/externo", name="movimiento_externo")
     */
    public function externoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);
        $user = $this->getUser();

        if (get_class($expediente->getUbicacionActual()) == \AppBundle\Entity\MesaEntrada::class) {
            $form = $this->createForm(MovimientoExpedienteType::class,
                    $movimientoExpediente, ['pase' => 'externo']);
        } else {
            $form = $this->createForm(MovimientoExpedienteType::class,
                    $movimientoExpediente, ['pase' => 'externo',
                'dependencia_id' => $user->getPersona()->getDependencia()->getId()]);
        }
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $mesaentrada = $em->getRepository("AppBundle:Dependencia")
                                ->find($form['mesaentrada']
                                        ->getData()->getDependencia()
                                        ->getId())->getMesaentrada();
                $movimientoExpediente->setTipoSalida('Externo');
                $movimientoExpediente->setExpediente($expediente);
                $fechaHoy = date("d-m-Y");
                $date = \DateTime::createFromFormat('d-m-Y', $fechaHoy);
                $movimientoExpediente->setFecha($date);
                $movimientoExpediente->setUbicacion($mesaentrada);

                $expediente->getMovimientos()->add($movimientoExpediente);
                $expediente->setUbicacionActual($mesaentrada);
                $expediente->setEstado('NUEVO');
                $em->persist($expediente);
                $em->flush();

                $this->addFlash('success', 'Pase hacia ' . $mesaentrada
                                ->getDependencia()->getDescripcion() . ' exitoso.');

                return $this->redirectToRoute('listado_expediente',
                                ['currentPage' => 1]);
            }
        }
        return $this->render('AppBundle:Movimiento:externo.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }

    /**
     * @Route("/expediente/{id}/add/movimiento/archivado", name="movimiento_archivado")
     */
    public function archivadoAction(Request $request, $id) {
        $em = $this->getDoctrine()->getEntityManager();
        $movimientoExpediente = new MovimientoExpediente();
        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $form = $this->createForm(MovimientoExpedienteType::class,
                $movimientoExpediente, ['pase' => 'archivar']);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $movimientoExpediente->setUsuario($this->getUser()->getIup());
                $lugarfisico = $em->getRepository("AppBundle:LugarFisico")->find($form['lugarfisico']['tipo']->getData()->getId());
                $movimientoExpediente->setTipoSalida('Archivado');
                $movimientoExpediente->setExpediente($expediente);
                $fechaHoy = date("d-m-Y");
                $date = \DateTime::createFromFormat('d-m-Y', $fechaHoy);
                $movimientoExpediente->setFecha($date);
                $movimientoExpediente->setUbicacion($lugarfisico);
                $expediente->getMovimientos()->add($movimientoExpediente);
                $expediente->setUbicacionActual($lugarfisico);
                $em->persist($expediente);
                $em->flush();
                $this->addFlash('success', 'Pase hacia ' . $lugarfisico
                                ->getTipo() . ' exitoso.');

                return $this->redirectToRoute('listado_movimiento',
                                ['id' => $expediente->getId(), 'currentPage' => 1]);
            }
        }
        return $this->render('AppBundle:Movimiento:archivar.html.twig', [
                    'form' => $form->createView(),
                    'expediente' => $expediente
        ]);
    }

    /**
     * @Route("expediente/{id}/movimiento/listado/{currentPage}", name="listado_movimiento")
     */
    public function listaMovimientoAction(Request $request, $id, $currentPage) {
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->getUser();
        $limit = 15;
        $totalItems = 0;
        $maxPages = 0;
        $movimientos = array();

        $expediente = $em->getRepository("AppBundle:Expediente")->find($id);

        $formMovimientoFilter = $this->createForm(MovimientoExpedienteFilterType::class);
        $formMovimientoFilter->handleRequest($request);
        if ($formMovimientoFilter->isSubmitted() == false && $this->get('session')->get('movimiento_listar_request')) {
            $formMovimientoFilter->handleRequest($this->get('session')->get('movimiento_listar_request'));
        }

        if ($formMovimientoFilter->isValid()) {
            $filterBuilder = $em->getRepository('AppBundle:MovimientoExpediente')->createQueryBuilder('m');
            $filterBuilder->leftJoin(Expediente::class, "e", "WITH",
                            "m.expediente = e.id")
                    ->where('m.expediente = :expediente')
//                                ->andWhere('w.id != :expediente_id')
                    ->setParameter('expediente', $expediente);
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($formMovimientoFilter, $filterBuilder);
            $totalItems = count($filterBuilder->getQuery()->getResult());

            $filterBuilder->setFirstResult($limit * ($currentPage - 1));
            $filterBuilder->setMaxResults($limit);

            $paginator = new Paginator($filterBuilder, $fetchJoinCollection = true);
            $movimientos = $paginator->getQuery()->getResult();
            $maxPages = ceil($totalItems / $limit);
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

        return $this->render('AppBundle:Expediente:listadoMovimientos.html.twig', array(
                    'movimientos' => $movimientos,
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
        $movimiento = $em->getRepository("AppBundle:MovimientoExpediente")->find($id);

        // replace this example code with whatever you need
        return $this->render('AppBundle:Movimiento:detalleMovimiento.html.twig', [
                    'movimiento' => $movimiento
        ]);
    }

    /**
     * @Route("expediente/{id}/movimiento/editar", name="editar_movimiento")
     */
    public function editMovimientoAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $movimiento = $em->getRepository("AppBundle:MovimientoExpediente")->find($id);
        $expediente = $movimiento->getExpediente()->getId();

        switch ($movimiento->getTipoSalida()) {
            case ('Externo'):
                $form = $this->createForm(MovimientoExpedienteType::class, $movimiento, ['pase' => 'externo']);
                $form->handleRequest($request);

                if ($form->isSubmitted()) {
                    $em->persist($movimiento);
                    $em->flush();
                    return $this->redirectToRoute('listado_movimiento', ["id" => $movimiento->getExpediente()->getId(), 'currentPage' => 1]);
                }
                return $this->render('AppBundle:Movimiento:editarExterno.html.twig', array(
                            'movimiento' => $movimiento,
                            'form' => $form->createView(),
                            'accion' => 'Editar'
                ));
                break;

            case('Interno'):
                $form = $this->createForm(MovimientoExpedienteType::class, $movimiento, ['pase' => 'interno']);
                $form->handleRequest($request);
                $expediente = $em->getRepository("AppBundle:Expediente")->find($movimiento->getExpediente()->getId());

                if ($form->isSubmitted()) {
                    $em->persist($movimiento);
                    $em->flush();
                    return $this->redirectToRoute('listado_movimiento', ["id" => $movimiento->getExpediente()->getId(), 'currentPage' => 1]);
                }
                return $this->render('AppBundle:Movimiento:editarInterno.html.twig', array(
                            'movimiento' => $movimiento,
                            'expediente' => $expediente,
                            'form' => $form->createView(),
                            'accion' => 'Editar'
                ));
                break;

            case('Archivado'):
                $form = $this->createForm(MovimientoExpedienteType::class, $movimiento, ['pase' => 'archivar']);
                $form->handleRequest($request);

                if ($form->isSubmitted()) {
                    $em->persist($movimiento);
                    $em->flush();
                    return $this->redirectToRoute('listado_movimiento', ["id" => $movimiento->getExpediente()->getId(), 'currentPage' => 1]);
                }
                return $this->render('AppBundle:Movimiento:editarArchivar.html.twig', array(
                            'movimiento' => $movimiento,
                            'form' => $form->createView(),
                            'accion' => 'Editar'
                ));
                break;

            default:
                break;
        }
        // replace this example code with whatever you need
        return $this->render('AppBundle:Movimiento:detalleMovimiento.html.twig', array(
                    'form' => $form->createView(),
                    'accion' => 'Editar'
        ));
    }

    /**
     * @Route("expediente/{id}/movimiento/eliminar", name="eliminar_movimiento")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $movimiento = $em->getRepository("AppBundle:MovimientoExpediente")->find($id);

        // replace this example code with whatever you need
        if (!$movimiento) {
            throw $this->createNotFoundException('No element found for id ' . $id);
        }

        $em->remove($movimiento);
        $flush = $em->flush();

//        if ($flush == null) {
//            echo "Post se ha borrado correctamente";
//        } else {
//            echo "El post no se ha borrado";
//        }

        return $this->redirectToRoute('listado_movimiento', ["id" => $movimiento->getExpediente()->getId(), 'currentPage' => 1]);
    }

}
