<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'lexik_form_filter.apply_filter.doctrine_orm' shared service.

include_once $this->targetDirs[3].'/vendor/lexik/form-filter-bundle/Event/Listener/DoctrineApplyFilterListener.php';

return $this->services['lexik_form_filter.apply_filter.doctrine_orm'] = new \Lexik\Bundle\FormFilterBundle\Event\Listener\DoctrineApplyFilterListener('and');
