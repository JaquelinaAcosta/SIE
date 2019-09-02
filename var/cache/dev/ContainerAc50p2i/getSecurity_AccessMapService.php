<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/AccessMapInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/AccessMap.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestMatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestMatcher.php';

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/add/expediente'), [0 => 'ROLE_RESPONSABLE'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/listaExpediente'), [0 => 'ROLE_USER', 1 => 'ROLE_RESPONSABLE'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente/editar/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente/delete/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente/add/caratulaAgregada/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente/delete_caratula/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente//caratula/listado/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente/ver_caratula/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente/add/movimiento'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente/movimiento/editar/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente/resolucion/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/expediente/resolucion/detalle/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/usuario/listado/'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/usuario/add'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/usuario/delete/'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/dependencia/'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/adm/gestionar/mesa_entrada/'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/persona/listado/'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/persona/add'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/persona/delete/'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/persona/edit/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/gestionar/persona_responsbles/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/lugar_fisico/edit/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/lugar_fisico/add'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/gestionar/lugarfisico_responsables/'), [0 => 'ROLE_RESPONSABLE', 1 => 'ROLE_USER'], NULL);

return $instance;
