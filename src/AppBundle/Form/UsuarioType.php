<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UsuarioType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $password = $options['contrasenia'];
        $role = $options['role'];

        $builder
                ->add('iup', TextType::class, array(
                    "label" => "Ej: usuario1:", "attr" => array(
                        "class" => "form-exp form-control",
                        "placeholder" => "usuario1"
                    )
                ))
               
                ->add('email', RepeatedType::class, [
                    'type' => EmailType::class,
                    'invalid_message' => 'El email no coincide.',
                    'options' => ['attr' => ['class' => 'email-field form-control']],
                    'required' => true,
                    'first_options' => ['label' => false,'attr'=>[
                        'class'=>'form-control',
                        'placeholder'=>'Ingrese email'
                    ]],
                    'second_options' => ['label' => false,'attr'=>[
                        'class'=>'form-control',
                        'placeholder'=>'Repita su email'
                    ]],
                ])
                ->add('contrasenia', RepeatedType::class, [
                    'type' => PasswordType::class,
                    'invalid_message' => 'Las contraseñas deben coincidir.',
                    'options' => ['attr' => ['class' => 'password-field form-control']],
                    'required' => true,
                    'first_options' => ['label' => false,'attr'=>[
                        'class'=>'form-control',
                        'placeholder'=>'Ingrese contraseña'
                    ]],
                    'second_options' => ['label' => false,'attr'=>[
                        'class'=>'form-control',
                        'placeholder'=>'Repita la contraseña'
                    ]],
                ])
                ->add('Aceptar', SubmitType::class, array("attr" => array(
                        "class" => "form-submit btn btn-primary"
            )))
        ;

        if ($password != null) {
            $builder
                     ->add('email', EmailType::class, array(
                    "label" => "", "attr" => array(
                        "class" => "form-exp form-control",
                        "placeholder" => "ejemplo@ejemplo.com"
                    )
                ))
                    ->add('contrasenia', TextType::class, array(
                        "label" => "Contraseña: ", "attr" => array(
                            "class" => "form-exp form-control",
                            "placeholder" => "Contraseña"
                        )
                    ))
            ;
        }
        if ($role != null) {
            $builder
                    ->add('role', ChoiceType::class, array(
                        "placeholder" => "--Seleccione--",
                        "attr" => [
                            "class" => "form-control"],
                        'choices' => array(
                            'Usuario' => 'ROLE_USER',
                            'Responsable'=>'ROLE_RESPONSABLE',
                            'Administrador' => 'ROLE_ADMIN'
                )))
                    ->add('persona', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteType', array(
                        'class' => 'AppBundle:Persona',
                        'label' => 'Responsable',
                        'required' => false,
                        'attr' => array(
                            'class' => 'form form-control',
                            'placeholder' => 'Escriba parte del nombre y seleccione una de las opciones'
                        )
            ));
        }
    }

/**
     * {@inheritdoc}
     */

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuario',
            'contrasenia' => null,
            'role' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'usuario';
    }

}
