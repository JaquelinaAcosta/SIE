<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.query_sql_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Tools/Console/Command/RunSqlCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Command/Proxy/RunSqlDoctrineCommand.php';

$this->services['doctrine.query_sql_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();

$instance->setName('doctrine:query:sql');

return $instance;
