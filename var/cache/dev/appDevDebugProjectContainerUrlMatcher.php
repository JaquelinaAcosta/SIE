<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // caratulaAgregada
        if ('/caratulaAgregada' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\CaratulaAgregadaController::indexAction',  '_route' => 'caratulaAgregada',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/add')) {
                // nueva_dependencia
                if ('/add/dependencia' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DependenciaController::indexAction',  '_route' => 'nueva_dependencia',);
                }

                if (0 === strpos($pathinfo, '/add/expediente')) {
                    // expedienteAsociado
                    if (0 === strpos($pathinfo, '/add/expediente_asociado') && preg_match('#^/add/expediente_asociado/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, ['_route' => 'expedienteAsociado']), array (  '_controller' => 'AppBundle\\Controller\\ExpedienteAsociadoController::indexAction',));
                    }

                    // nuevo_expediente
                    if ('/add/expediente' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::indexAction',  '_route' => 'nuevo_expediente',);
                    }

                }

                // nueva_resolucion
                if (0 === strpos($pathinfo, '/add/resolucion') && preg_match('#^/add/resolucion/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'nueva_resolucion']), array (  '_controller' => 'AppBundle\\Controller\\ResolucionController::indexAction',));
                }

            }

            // add_evento
            if ('/ajax-form' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::ajaxFormAction',  '_route' => 'add_evento',);
            }

            // add_movimiento
            if ('/ajax_movimiento' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\MovimientoExpedienteController::ajaxFormAction',  '_route' => 'add_movimiento',);
            }

        }

        elseif (0 === strpos($pathinfo, '/expediente')) {
            // listado_expediente
            if ('/expediente/listado' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::listaExpedientesAction',  '_route' => 'listado_expediente',);
            }

            // ver_expediente
            if (0 === strpos($pathinfo, '/expediente/view') && preg_match('#^/expediente/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ver_expediente']), array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::expedienteAction',));
            }

            // eliminar_expediente
            if (0 === strpos($pathinfo, '/expediente/delete') && preg_match('#^/expediente/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'eliminar_expediente']), array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::deleteAction',));
            }

            // editar_expediente
            if (0 === strpos($pathinfo, '/expediente/edit') && preg_match('#^/expediente/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'editar_expediente']), array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::editAction',));
            }

        }

        // lugarFisico
        if ('/lugarFisico' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\LugarFisicoController::indexAction',  '_route' => 'lugarFisico',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // loginUsuario
            if ('/loginUsuario' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PaginaPrincipalController::loginAction',  '_route' => 'loginUsuario',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PaginaPrincipalController::loginCheckAction',  '_route' => 'login_check',);
            }

            // logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PaginaPrincipalController::logoutAction',  '_route' => 'logout',);
            }

        }

        // mesaEntrada
        if ('/mesaEntrada' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\MesaEntradaController::indexAction',  '_route' => 'mesaEntrada',);
        }

        // moverExpediente
        if (0 === strpos($pathinfo, '/movimiento/expediente') && preg_match('#^/movimiento/expediente/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'moverExpediente']), array (  '_controller' => 'AppBundle\\Controller\\MovimientoExpedienteController::indexAction',));
        }

        // inicio
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\PaginaPrincipalController::indexAction',  '_route' => 'inicio',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_inicio;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'inicio'));
            }

            return $ret;
        }
        not_inicio:

        // homepage
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\PaginaPrincipalController::homeAction',  '_route' => 'homepage',);
        }

        // persona
        if ('/persona' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\PersonaController::indexAction',  '_route' => 'persona',);
        }

        // nuevo_registro
        if ('/registro' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'nuevo_registro',);
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
