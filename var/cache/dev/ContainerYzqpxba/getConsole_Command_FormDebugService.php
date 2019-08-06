<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Command/DebugCommand.php';

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load('getForm_RegistryService.php')) && false ?: '_'}, [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'AppBundle\\Form', 2 => '', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'AppBundle\\Form\\CaratulaAgregadaType', 1 => 'AppBundle\\Form\\DependenciaType', 2 => 'AppBundle\\Form\\ExpedienteAsociadoType', 3 => 'AppBundle\\Form\\ExpedienteType', 4 => 'AppBundle\\Form\\LugarFisicoType', 5 => 'AppBundle\\Form\\MesaEntradaType', 6 => 'AppBundle\\Form\\MovimientoExpedienteType', 7 => 'AppBundle\\Form\\PersonaFilterType', 8 => 'AppBundle\\Form\\PersonaType', 9 => 'AppBundle\\Form\\ResolucionType', 10 => 'AppBundle\\Form\\ResponsableType', 11 => 'AppBundle\\Form\\UsuarioType', 12 => 'PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteType', 13 => 'PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteFilterType', 14 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\TextFilterType', 15 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\NumberFilterType', 16 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\NumberRangeFilterType', 17 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\CheckboxFilterType', 18 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\BooleanFilterType', 19 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\ChoiceFilterType', 20 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\DateFilterType', 21 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\DateRangeFilterType', 22 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\DateTimeFilterType', 23 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\DateTimeRangeFilterType', 24 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\CollectionAdapterFilterType', 25 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\SharedableFilterType', 26 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\EntityFilterType', 27 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 28 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 29 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\FilterTypeExtension', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 2 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 7 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 8 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;
