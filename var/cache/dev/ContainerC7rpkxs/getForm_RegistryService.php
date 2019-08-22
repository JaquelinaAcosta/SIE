<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormRegistryInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormRegistry.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormExtensionInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DependencyInjection/DependencyInjectionExtension.php';

return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\ServiceLocator(['Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\BooleanFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_boolean']) ? $this->services['lexik_form_filter.type.filter_boolean'] : ($this->services['lexik_form_filter.type.filter_boolean'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\BooleanFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\CheckboxFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_checkbox']) ? $this->services['lexik_form_filter.type.filter_checkbox'] : ($this->services['lexik_form_filter.type.filter_checkbox'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\CheckboxFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\ChoiceFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_choice']) ? $this->services['lexik_form_filter.type.filter_choice'] : ($this->services['lexik_form_filter.type.filter_choice'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\ChoiceFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\CollectionAdapterFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_collection_adapter']) ? $this->services['lexik_form_filter.type.filter_collection_adapter'] : ($this->services['lexik_form_filter.type.filter_collection_adapter'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\CollectionAdapterFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\DateFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_date']) ? $this->services['lexik_form_filter.type.filter_date'] : ($this->services['lexik_form_filter.type.filter_date'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\DateFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\DateRangeFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_date_range']) ? $this->services['lexik_form_filter.type.filter_date_range'] : ($this->services['lexik_form_filter.type.filter_date_range'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\DateRangeFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\DateTimeFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_datetime']) ? $this->services['lexik_form_filter.type.filter_datetime'] : ($this->services['lexik_form_filter.type.filter_datetime'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\DateTimeFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\DateTimeRangeFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_datetime_range']) ? $this->services['lexik_form_filter.type.filter_datetime_range'] : ($this->services['lexik_form_filter.type.filter_datetime_range'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\DateTimeRangeFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\EntityFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_entity']) ? $this->services['lexik_form_filter.type.filter_entity'] : $this->load('getLexikFormFilter_Type_FilterEntityService.php')) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\NumberFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_number']) ? $this->services['lexik_form_filter.type.filter_number'] : ($this->services['lexik_form_filter.type.filter_number'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\NumberFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\NumberRangeFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_number_range']) ? $this->services['lexik_form_filter.type.filter_number_range'] : ($this->services['lexik_form_filter.type.filter_number_range'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\NumberRangeFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\SharedableFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_sharedable']) ? $this->services['lexik_form_filter.type.filter_sharedable'] : ($this->services['lexik_form_filter.type.filter_sharedable'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\SharedableFilterType())) && false ?: '_'};
}, 'Lexik\\Bundle\\FormFilterBundle\\Filter\\Form\\Type\\TextFilterType' => function () {
    return ${($_ = isset($this->services['lexik_form_filter.type.filter_text']) ? $this->services['lexik_form_filter.type.filter_text'] : ($this->services['lexik_form_filter.type.filter_text'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType(1))) && false ?: '_'};
}, 'PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteType' => function () {
    return ${($_ = isset($this->services['pugx_autocompleter.autocomplete']) ? $this->services['pugx_autocompleter.autocomplete'] : $this->load('getPugxAutocompleter_AutocompleteService.php')) && false ?: '_'};
}, 'PUGX\\AutocompleterBundle\\Form\\Type\\AutocompleteFilterType' => function () {
    return ${($_ = isset($this->services['pugx_autocompleter.filter_autocomplete']) ? $this->services['pugx_autocompleter.filter_autocomplete'] : $this->load('getPugxAutocompleter_FilterAutocompleteService.php')) && false ?: '_'};
}, 'AppBundle\\Form\\CaratulaAgregadaFilterType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\CaratulaAgregadaFilterType']) ? $this->services['AppBundle\\Form\\CaratulaAgregadaFilterType'] : ($this->services['AppBundle\\Form\\CaratulaAgregadaFilterType'] = new \AppBundle\Form\CaratulaAgregadaFilterType())) && false ?: '_'};
}, 'AppBundle\\Form\\CaratulaAgregadaType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\CaratulaAgregadaType']) ? $this->services['AppBundle\\Form\\CaratulaAgregadaType'] : ($this->services['AppBundle\\Form\\CaratulaAgregadaType'] = new \AppBundle\Form\CaratulaAgregadaType())) && false ?: '_'};
}, 'AppBundle\\Form\\DependenciaFilterType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\DependenciaFilterType']) ? $this->services['AppBundle\\Form\\DependenciaFilterType'] : ($this->services['AppBundle\\Form\\DependenciaFilterType'] = new \AppBundle\Form\DependenciaFilterType())) && false ?: '_'};
}, 'AppBundle\\Form\\DependenciaType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\DependenciaType']) ? $this->services['AppBundle\\Form\\DependenciaType'] : ($this->services['AppBundle\\Form\\DependenciaType'] = new \AppBundle\Form\DependenciaType())) && false ?: '_'};
}, 'AppBundle\\Form\\ExpedienteAsociadoFilterType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\ExpedienteAsociadoFilterType']) ? $this->services['AppBundle\\Form\\ExpedienteAsociadoFilterType'] : ($this->services['AppBundle\\Form\\ExpedienteAsociadoFilterType'] = new \AppBundle\Form\ExpedienteAsociadoFilterType())) && false ?: '_'};
}, 'AppBundle\\Form\\ExpedienteAsociadoType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\ExpedienteAsociadoType']) ? $this->services['AppBundle\\Form\\ExpedienteAsociadoType'] : ($this->services['AppBundle\\Form\\ExpedienteAsociadoType'] = new \AppBundle\Form\ExpedienteAsociadoType())) && false ?: '_'};
}, 'AppBundle\\Form\\ExpedienteFilterType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\ExpedienteFilterType']) ? $this->services['AppBundle\\Form\\ExpedienteFilterType'] : ($this->services['AppBundle\\Form\\ExpedienteFilterType'] = new \AppBundle\Form\ExpedienteFilterType())) && false ?: '_'};
}, 'AppBundle\\Form\\ExpedienteSearchFilterType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\ExpedienteSearchFilterType']) ? $this->services['AppBundle\\Form\\ExpedienteSearchFilterType'] : ($this->services['AppBundle\\Form\\ExpedienteSearchFilterType'] = new \AppBundle\Form\ExpedienteSearchFilterType())) && false ?: '_'};
}, 'AppBundle\\Form\\ExpedienteType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\ExpedienteType']) ? $this->services['AppBundle\\Form\\ExpedienteType'] : ($this->services['AppBundle\\Form\\ExpedienteType'] = new \AppBundle\Form\ExpedienteType())) && false ?: '_'};
}, 'AppBundle\\Form\\LugarFisicoFilterType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\LugarFisicoFilterType']) ? $this->services['AppBundle\\Form\\LugarFisicoFilterType'] : ($this->services['AppBundle\\Form\\LugarFisicoFilterType'] = new \AppBundle\Form\LugarFisicoFilterType())) && false ?: '_'};
}, 'AppBundle\\Form\\LugarFisicoType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\LugarFisicoType']) ? $this->services['AppBundle\\Form\\LugarFisicoType'] : ($this->services['AppBundle\\Form\\LugarFisicoType'] = new \AppBundle\Form\LugarFisicoType())) && false ?: '_'};
}, 'AppBundle\\Form\\MesaEntradaType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\MesaEntradaType']) ? $this->services['AppBundle\\Form\\MesaEntradaType'] : ($this->services['AppBundle\\Form\\MesaEntradaType'] = new \AppBundle\Form\MesaEntradaType())) && false ?: '_'};
}, 'AppBundle\\Form\\MovimientoExpedienteFilterType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\MovimientoExpedienteFilterType']) ? $this->services['AppBundle\\Form\\MovimientoExpedienteFilterType'] : ($this->services['AppBundle\\Form\\MovimientoExpedienteFilterType'] = new \AppBundle\Form\MovimientoExpedienteFilterType())) && false ?: '_'};
}, 'AppBundle\\Form\\MovimientoExpedienteType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\MovimientoExpedienteType']) ? $this->services['AppBundle\\Form\\MovimientoExpedienteType'] : ($this->services['AppBundle\\Form\\MovimientoExpedienteType'] = new \AppBundle\Form\MovimientoExpedienteType())) && false ?: '_'};
}, 'AppBundle\\Form\\PersonaFilterType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\PersonaFilterType']) ? $this->services['AppBundle\\Form\\PersonaFilterType'] : ($this->services['AppBundle\\Form\\PersonaFilterType'] = new \AppBundle\Form\PersonaFilterType())) && false ?: '_'};
}, 'AppBundle\\Form\\PersonaType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\PersonaType']) ? $this->services['AppBundle\\Form\\PersonaType'] : ($this->services['AppBundle\\Form\\PersonaType'] = new \AppBundle\Form\PersonaType())) && false ?: '_'};
}, 'AppBundle\\Form\\ResolucionType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\ResolucionType']) ? $this->services['AppBundle\\Form\\ResolucionType'] : ($this->services['AppBundle\\Form\\ResolucionType'] = new \AppBundle\Form\ResolucionType())) && false ?: '_'};
}, 'AppBundle\\Form\\ResponsableType' => function () {
    return ${($_ = isset($this->services['my_form']) ? $this->services['my_form'] : $this->load('getMyFormService.php')) && false ?: '_'};
}, 'AppBundle\\Form\\UsuarioFilterType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\UsuarioFilterType']) ? $this->services['AppBundle\\Form\\UsuarioFilterType'] : ($this->services['AppBundle\\Form\\UsuarioFilterType'] = new \AppBundle\Form\UsuarioFilterType())) && false ?: '_'};
}, 'AppBundle\\Form\\UsuarioType' => function () {
    return ${($_ = isset($this->services['AppBundle\\Form\\UsuarioType']) ? $this->services['AppBundle\\Form\\UsuarioType'] : ($this->services['AppBundle\\Form\\UsuarioType'] = new \AppBundle\Form\UsuarioType())) && false ?: '_'};
}, 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => function () {
    return ${($_ = isset($this->services['form.type.entity']) ? $this->services['form.type.entity'] : $this->load('getForm_Type_EntityService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => function () {
    return ${($_ = isset($this->services['form.type.choice']) ? $this->services['form.type.choice'] : $this->load('getForm_Type_ChoiceService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => function () {
    return ${($_ = isset($this->services['form.type.file']) ? $this->services['form.type.file'] : $this->load('getForm_Type_FileService.php')) && false ?: '_'};
}, 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => function () {
    return ${($_ = isset($this->services['form.type.form']) ? $this->services['form.type.form'] : $this->load('getForm_Type_FormService.php')) && false ?: '_'};
}]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['lexik_form_filter.type_extension.filter_extension']) ? $this->services['lexik_form_filter.type_extension.filter_extension'] : ($this->services['lexik_form_filter.type_extension.filter_extension'] = new \Lexik\Bundle\FormFilterBundle\Filter\Form\FilterTypeExtension())) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_extension.form.transformation_failure_handling']) ? $this->services['form.type_extension.form.transformation_failure_handling'] : $this->load('getForm_TypeExtension_Form_TransformationFailureHandlingService.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['form.type_extension.form.http_foundation']) ? $this->services['form.type_extension.form.http_foundation'] : $this->load('getForm_TypeExtension_Form_HttpFoundationService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['form.type_extension.form.validator']) ? $this->services['form.type_extension.form.validator'] : $this->load('getForm_TypeExtension_Form_ValidatorService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['form.type_extension.upload.validator']) ? $this->services['form.type_extension.upload.validator'] : $this->load('getForm_TypeExtension_Upload_ValidatorService.php')) && false ?: '_'};
    yield 5 => ${($_ = isset($this->services['form.type_extension.csrf']) ? $this->services['form.type_extension.csrf'] : $this->load('getForm_TypeExtension_CsrfService.php')) && false ?: '_'};
    yield 6 => ${($_ = isset($this->services['form.type_extension.form.data_collector']) ? $this->services['form.type_extension.form.data_collector'] : $this->load('getForm_TypeExtension_Form_DataCollectorService.php')) && false ?: '_'};
}, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.repeated.validator']) ? $this->services['form.type_extension.repeated.validator'] : ($this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension())) && false ?: '_'};
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_extension.submit.validator']) ? $this->services['form.type_extension.submit.validator'] : ($this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension())) && false ?: '_'};
}, 1)], new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['form.type_guesser.validator']) ? $this->services['form.type_guesser.validator'] : $this->load('getForm_TypeGuesser_ValidatorService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['form.type_guesser.doctrine']) ? $this->services['form.type_guesser.doctrine'] : $this->load('getForm_TypeGuesser_DoctrineService.php')) && false ?: '_'};
}, 2), NULL)], ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->load('getForm_ResolvedTypeFactoryService.php')) && false ?: '_'});
