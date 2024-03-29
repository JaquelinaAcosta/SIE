<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use AppBundle\Form\Event\Listener\AddStateFieldSubscriber;

class ExpedienteType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder

                ->add('codigoExpediente', TextType::class, array(
                    "label" => "Nro. de Expediente:", "attr" => array(
                        "class" => "cod form-control",
                        "placeholder" => "",
                        "maxlength"=>5
                    )
                ))
                ->add('numeroExpediente', TextType::class, array(
                    "label" => "Nro. de Expediente:", "attr" => array(
                        "class" => "num form-control",
                        "placeholder" => "",
                        "maxlength"=>7
                    )
                ))
                ->add('digitoExpediente', TextType::class, array(
                    "label" => "Nro. de Expediente:", "attr" => array(
                        "class" => "dig form-control",
                        "placeholder" => "",
                        "maxlength"=>1
                    )
                ))
//                ->add('iniciadorDependencia', EntityType::class, array(
//                    "label" => "Dependencia:",
//                    "placeholder" => "--Seleccione--",
//                    "class" => 'AppBundle:Dependencia', "attr" => array(
//                        "class" => "form-control"
//                    ))
//                )
                ->add('concepto', TextareaType::class, array(
                    "label" => "Concepto: ", "attr" => array(
                        "class" => "form-name form-control",
                        "placeholder" => "",
                        "rows"=>5
                    )
                ))
                 ->add('tema', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteType', array(
                    'class' => 'AppBundle:Tema',
                    'label' => 'Responsable',
                    'required' => false,
                    'attr' => array(
                        'class'=>'form form-control',
                        'placeholder' => 'Escriba parte del código y seleccione un tema'
                    )
                ))
                ->add('fojas', TextType::class, array(
                    "label" => "Nro. de fojas:", "attr" => array(
                        "class" => "align-center form-control",
                        "placeholder" => "1...2..."
                    )
                ))
                ->add('tipo', TextType::class, array(
                    "label" => "Tipo:", "attr" => array(
                        "class" => "form-name form-control",
                        "placeholder" => "Jurídico,Varios.."
                    )
                ))
//                ->add('ubicacionActual', ChoiceType::class, array(
//                    "choices" => array(
//                        "--Seleccione--" => 0,
//                        "Mesa de Entrada" => 1,
//                        "Persona" => 2,
//                        "Lugar Físico" => 3
//                    ),
//                    "label" => false, "attr" => array(
//                        "class" => "form-name form-control"
//                    )
//                ))
                ->add('fechaInicio', TextType::class, array(
                    "label" => false, "attr" => array(
                        "class" => 'datepicker form-control',
                        "placeholder" => 'MM-DD-AAAA'
                    )
                ))
                ->add('fechaFin', TextType::class, array(
                    "label" => false, "attr" => array(
                        "class" => 'datepicker form-control',
                        "placeholder" => 'MM-DD-AAAA'
                    ),
                    "required"=>false
                ))
//                ->add('expedientes_asociados', CollectionType::class,[
//                   'entry_type'=> ExpedienteAsociadoType::class,
//                   'label'=>false,
//                   'entry_options'=>[
//                       'label'=>false,
//                       ],
//                   'prototype' => true,
//                   'allow_add'=>true,
//                   'allow_delete' => true,
//                   'by_reference'=>false,
//               ])
                ->add('Guardar', SubmitType::class, array("attr" => array(
                        "class" => "form-submit btn btn-primary"
                    )
        ));
        // $builder->addEventSubscriber(new AddStateFieldSubscriber());
    }

/**
     * {@inheritdoc}
     */

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Expediente',
            'error_mapping' => array(
                'validarCodigoExpediente' => 'codigoExpediente',
                'validarNumeroExpediente' => 'numeroExpediente',
                'validarDigitoExpediente' => 'digitoExpediente',
                'validarFecha'=>'fechaInicio'
                
            ),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'expediente';
    }
}


