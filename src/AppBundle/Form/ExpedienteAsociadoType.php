<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ExpedienteAsociadoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('expedienteAsociado', EntityType::class,array(
                    "class"=>'AppBundle:Expediente',
                    "placeholder"=>"--Seleccione--",
               "label"=>"Nro. de Expediente Asociado:","attr"=> array(
               "class"=>"form-exp form-control" 
            )
        ))
//                ->add('expedientePadre', TextType::class,array(
//            "label"=>"Nro. de Expediente Padre:","attr"=> array(
//               "class"=>"form-exp form-control" ,
//               "placeholder"=>"00000-000000000-0"
//            )
//        ))
                ->add('fecha', TextType::class,array(
            "label"=>"Fecha:","attr" => array(
                        "class" => 'datepicker form-control',
                        "placeholder" => 'MM-DD-AAAA'
                )
        ))
                ->add('ordenAsociacion', TextType::class,array(
            "label"=>"Orden Asociación","attr"=> array(
               "class"=>"form-exp form-control" ,
                "placeholder"=>"1, 2, ..."
            )
        ))
//                ->add('Aceptar', SubmitType::class,array("attr"=> array(
//            "class"=>"form-submit btn btn-primary" 
//            )
//        ))
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
