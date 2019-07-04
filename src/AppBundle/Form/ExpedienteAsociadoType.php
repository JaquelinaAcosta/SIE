<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExpedienteAsociadoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('expedienteAsociado', TextType::class,array(
            "label"=>"Nro. de Expediente Asociado:","attr"=> array(
               "class"=>"form-exp form-control" ,
               "placeholder"=>"00000-000000000-0"
            )
        ))
                ->add('expedientePadre', TextType::class,array(
            "label"=>"Nro. de Expediente Padre:","attr"=> array(
               "class"=>"form-exp form-control" ,
               "placeholder"=>"00000-000000000-0"
            )
        ))
                ->add('fecha', DateType::class,array(
            "label"=>"Fecha:"
        ))
                ->add('ordenAsociacion', TextType::class,array(
            "label"=>"Orden Asociación","attr"=> array(
               "class"=>"form-exp form-control" ,
                "placeholder"=>"1, 2, ..."
            )
        ))
                ->add('Aceptar', SubmitType::class,array("attr"=> array(
            "class"=>"form-submit btn btn-primary" 
            )
        ))
                ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ExpedienteAsociado'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_expedienteasociado';
    }


}
