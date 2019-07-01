<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class PersonaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre', TextType::class,array(
            "label"=>"Ingrese nombre:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Nombre"
            )
        ))
        ->add('apellido', TextType::class,array(
            "label"=>"Ingrese apellido","attr"=> array(
               "class"=>"form-name form-control",
               "placeholder"=>"Apellido"
            )
        ))       
        ->add('dni', TextType::class,array(
            "label"=>"Ingrese DNI","attr"=> array(
               "class"=>"form-name form-control",
               "placeholder"=>"D.N.I" 
            )
        ))
        ->add('cargo', TextType::class,array(
            "label"=>"Ingrese un cargo","attr"=> array(
               "class"=>"form-name form-control",
               "placeholder"=>"Cargo" 
            )
        ))
        ->add('Aceptar', SubmitType::class,array("attr"=> array(
               "class"=>"form-submit btn btn-primary" 
            )));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Persona'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_persona';
    }


}
