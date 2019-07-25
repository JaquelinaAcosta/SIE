<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PersonaType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('dependencia', EntityType::class, array(
                    "label" => false,
                    "placeholder" => "--Seleccione--",
                    "class" => 'AppBundle:Dependencia', "attr" => array(
                        "class" => "form-control"
                    ))
                )
                ->add('nombre', TextType::class, array(
                    "label" => "Nombre:", "attr" => array(
                        "class" => "form-name form-control",
                        "placeholder" => "Escriba parte del nombre y seleccione"
                    )
                ))
                ->add('apellido', TextType::class, array(
                    "label" => "Apellido:", "attr" => array(
                        "class" => "form-name form-control",
                        "placeholder" => "Apellido"
                    )
                ))
                ->add('dni', TextType::class, array(
                    "label" => "DNI:", "attr" => array(
                        "class" => "form-name form-control",
                        "placeholder" => "Ej:40323795"
                    )
                ))
                ->add('cargo', TextType::class, array(
                    "label" => "Cargo:", "attr" => array(
                        "class" => "form-name form-control",
                        "placeholder" => "Cargo"
                    )
                ))
                ->add('Aceptar', SubmitType::class, array("attr" => array(
                        "class" => "form-submit btn btn-primary"
                    )
                ))
        ;
    }

/**
     * {@inheritdoc}
     */

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Persona'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_persona';
    }

}
