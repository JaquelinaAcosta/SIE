<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Form\ExpedienteSearchFilterType' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/lexik/form-filter-bundle/Filter/Form/Type/EmbeddedFilterTypeInterface.php';
include_once $this->targetDirs[3].'/src/AppBundle/Form/ExpedienteSearchFilterType.php';

return $this->services['AppBundle\\Form\\ExpedienteSearchFilterType'] = new \AppBundle\Form\ExpedienteSearchFilterType();