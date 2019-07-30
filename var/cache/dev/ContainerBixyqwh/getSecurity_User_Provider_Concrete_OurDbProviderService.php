<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.user.provider.concrete.our_db_provider' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/UserProviderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/User/ChainUserProvider.php';

return $this->services['security.user.provider.concrete.our_db_provider'] = new \Symfony\Component\Security\Core\User\ChainUserProvider(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.user.provider.concrete.db_username']) ? $this->services['security.user.provider.concrete.db_username'] : $this->load('getSecurity_User_Provider_Concrete_DbUsernameService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.user.provider.concrete.db_email']) ? $this->services['security.user.provider.concrete.db_email'] : $this->load('getSecurity_User_Provider_Concrete_DbEmailService.php')) && false ?: '_'};
}, 2));
