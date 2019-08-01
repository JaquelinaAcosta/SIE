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

        elseif (0 === strpos($pathinfo, '/expediente')) {
            // nueva_caratula
            if (0 === strpos($pathinfo, '/expediente/add/caratulaAgregada') && preg_match('#^/expediente/add/caratulaAgregada/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'nueva_caratula']), array (  '_controller' => 'AppBundle\\Controller\\CaratulaAgregadaController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/expediente/delete')) {
                // eliminar_caratula
                if (0 === strpos($pathinfo, '/expediente/delete_caratula') && preg_match('#^/expediente/delete_caratula/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'eliminar_caratula']), array (  '_controller' => 'AppBundle\\Controller\\CaratulaAgregadaController::deleteAction',));
                }

                // eliminar_expediente
                if (preg_match('#^/expediente/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'eliminar_expediente']), array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/expediente/edit')) {
                // editar_caratula
                if (0 === strpos($pathinfo, '/expediente/edit_caratula') && preg_match('#^/expediente/edit_caratula/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'editar_caratula']), array (  '_controller' => 'AppBundle\\Controller\\CaratulaAgregadaController::editCaratulaAction',));
                }

                // editar_expediente
                if (preg_match('#^/expediente/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'editar_expediente']), array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::editAction',));
                }

            }

            // listado_expediente
            if ('/expediente/listado' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::listaExpedientesAction',  '_route' => 'listado_expediente',);
            }

            // ver_expediente
            if (0 === strpos($pathinfo, '/expediente/view') && preg_match('#^/expediente/view/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ver_expediente']), array (  '_controller' => 'AppBundle\\Controller\\ExpedienteController::expedienteAction',));
            }

            // nuevo_movimiento
            if (preg_match('#^/expediente/(?P<id>[^/]++)/add/movimiento$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'nuevo_movimiento']), array (  '_controller' => 'AppBundle\\Controller\\MovimientoExpedienteController::indexAction',));
            }

        }

        // generar_dependencia
        if ('/config_inicial' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\ConfigController::generarDependenciaAction',  '_route' => 'generar_dependencia',);
        }

        if (0 === strpos($pathinfo, '/config_inicial_')) {
            // generar_persona
            if ('/config_inicial_persona' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConfigController::cargarPersonaAction',  '_route' => 'generar_persona',);
            }

            // set_dependencia
            if ('/config_inicial_dependencia_set' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConfigController::setearDependenciaAction',  '_route' => 'set_dependencia',);
            }

            // generar_mesaentrada
            if ('/config_inicial_dependencia_mesaentrada' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConfigController::generarMesaEntradaAction',  '_route' => 'generar_mesaentrada',);
            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            // add_evento
            if ('/ajax-form' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ajaxFormAction',  '_route' => 'add_evento',);
            }

            // add_movimiento
            if ('/ajax_movimiento' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\MovimientoExpedienteController::ajaxFormAction',  '_route' => 'add_movimiento',);
            }

            if (0 === strpos($pathinfo, '/ad')) {
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

                // adm_gestionar_mesaentrada
                if (0 === strpos($pathinfo, '/adm/gestionar/mesa_entrada') && preg_match('#^/adm/gestionar/mesa_entrada/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'adm_gestionar_mesaentrada']), array (  '_controller' => 'AppBundle\\Controller\\MesaEntradaController::admGestionarAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/persona')) {
            // persona_search
            if ('/persona_search' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::searchPersonaAction',  '_route' => 'persona_search',);
            }

            // persona_get
            if (0 === strpos($pathinfo, '/persona_get') && preg_match('#^/persona_get(?:(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'persona_get']), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\DefaultController::getPersonaAction',));
            }

            // nueva_persona
            if ('/persona/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonaController::indexAction',  '_route' => 'nueva_persona',);
            }

            // editar_persona
            if (0 === strpos($pathinfo, '/persona/edit') && preg_match('#^/persona/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'editar_persona']), array (  '_controller' => 'AppBundle\\Controller\\PersonaController::editPersonaAction',));
            }

            // listado_persona
            if ('/persona/listado' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PersonaController::listaDependenciasAction',  '_route' => 'listado_persona',);
            }

        }

        // tema_search
        if ('/tema_search' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::searchTemaAction',  '_route' => 'tema_search',);
        }

        // tema_get
        if (0 === strpos($pathinfo, '/tema_get') && preg_match('#^/tema_get(?:(?P<id>[^/]++))?$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'tema_get']), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\DefaultController::getTemaAction',));
        }

        if (0 === strpos($pathinfo, '/dependencia')) {
            if (0 === strpos($pathinfo, '/dependencia/a')) {
                // nueva_dependencia
                if ('/dependencia/add' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DependenciaController::indexAction',  '_route' => 'nueva_dependencia',);
                }

                // archivar_dependencia
                if (0 === strpos($pathinfo, '/dependencia/archivar') && preg_match('#^/dependencia/archivar/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'archivar_dependencia']), array (  '_controller' => 'AppBundle\\Controller\\DependenciaController::archivarAction',));
                }

                // alta_dependencia
                if (0 === strpos($pathinfo, '/dependencia/alta') && preg_match('#^/dependencia/alta/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'alta_dependencia']), array (  '_controller' => 'AppBundle\\Controller\\DependenciaController::altaAction',));
                }

            }

            // listado_dependencia
            if ('/dependencia/listado' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DependenciaController::listaDependenciasAction',  '_route' => 'listado_dependencia',);
            }

            // editar_dependencia
            if (0 === strpos($pathinfo, '/dependencia/edit') && preg_match('#^/dependencia/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'editar_dependencia']), array (  '_controller' => 'AppBundle\\Controller\\DependenciaController::editPersonaAction',));
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

        // gestionar_mesaentrada
        if ('/gestionar/mesa_entrada' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\MesaEntradaController::indexAction',  '_route' => 'gestionar_mesaentrada',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_gestionar_mesaentrada;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'gestionar_mesaentrada'));
            }

            return $ret;
        }
        not_gestionar_mesaentrada:

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

        if (0 === strpos($pathinfo, '/usuario')) {
            // nuevo_usuario
            if ('/usuario/add' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'nuevo_usuario',);
            }

            // editar_usuario
            if (0 === strpos($pathinfo, '/usuario/edit') && preg_match('#^/usuario/edit/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'editar_usuario']), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::editUsuarioAction',));
            }

            // listado_usuario
            if ('/usuario/listado' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::listaUsuarioAction',  '_route' => 'listado_usuario',);
            }

            // eliminar_usuario
            if (0 === strpos($pathinfo, '/usuario/delete') && preg_match('#^/usuario/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'eliminar_usuario']), array (  '_controller' => 'AppBundle\\Controller\\UsuarioController::deleteAction',));
            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
