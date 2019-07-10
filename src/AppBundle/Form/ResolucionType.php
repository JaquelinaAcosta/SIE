<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ResolucionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('expediente', TextType::class,array(
            "label"=>"Nro. de Expediente: ","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"00000-000000000-0"
            )
        ))
                ->add('numeroResolucion', TextType::class,array(
            "label"=>"Nro. de Resolución: ","attr"=> array(
               "class"=>"form-name form-control" ,
            )
        ))
                ->add('tipo', TextType::class,array(
            "label"=>"Tipo de Resolución:","attr"=> array(
               "class"=>"form-name form-control" 
            )
        ))
                ->add('responsable', TextType::class,array(
            "label"=>"Usuario Responsable: ","attr"=> array(
               "class"=>"form-name form-control" 
            )
        ) )
                ->add('fechaResolucion', TextType::class,array(
            "label"=>"Fecha:","attr"=> array(
               "class"=>'datepicker form-control',
                "placeholder"=>'MM-DD-')
        ))
                ->add('Aceptar', SubmitType::class,array("attr"=> array(
            "class"=>"form-submit btn btn-primary" 
            )
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Resolucion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_resolucion';
    }


}
