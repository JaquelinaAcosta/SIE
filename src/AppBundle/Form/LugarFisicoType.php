<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class LugarFisicoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('tipo', TextType::class,array(
            "label"=>"Tipo:","attr"=> array(
               "class"=>"form-name form-control" 
            )
        ))
                ->add('descripcion', TextareaType::class,array(
             "label"=>"Descripción: ","attr"=> array(
               "class"=>"form-name form-control" ,
                "placeholder"=>"Descripción..."
            )
        ))
                ->add('acceso', TextType::class,array(
            "label"=>"Acceso: ","attr"=> array(
               "class"=>"form-name form-control" ,
                "placeholder"=>" "
            )
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
            'data_class' => 'AppBundle\Entity\LugarFisico'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_lugarfisico';
    }


}
