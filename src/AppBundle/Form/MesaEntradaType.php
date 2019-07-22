<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Form\MesaEntradaType;

class MesaEntradaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
               ->add('responsables', CollectionType::class,[
                   'entry_type'=> ResponsableType::class,
                   'entry_options'=>[
                       'label'=>false,
                       ],
                   'prototype' => true,
                   'allow_add'=>true,
                   'allow_delete' => true,
                   'by_reference'=>false,
               ])
               ->add('codigoExpediente', TextType::class,array(
               "label"=>"Nro. de Expediente:","attr"=> array(
               "class"=>"form-exp form-control" ,
               "placeholder"=>"Escriba parte del codigo para seleccionar"
            )
        ));
                
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MesaEntrada'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_mesaentrada';
    }


}
