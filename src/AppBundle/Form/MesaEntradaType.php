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
        $gestion = $options['gestion'];
        
        $builder
                ->add('dependencia', EntityType::class, array(
                    "label" => false,
                    "placeholder" => "--Seleccione--",
                    
                    "class" => 'AppBundle:Dependencia', "attr" => array(
                        "class" => "form-control"
                    ))
                )
               ->add('responsables', CollectionType::class,[
                   'entry_type'=> ResponsableType::class,
                   'label'=>false,
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
               "placeholder"=>"Código de expediente..."
            )
        ));
        if($gestion != null){
             $builder->add('Guardar', SubmitType::class,
                     ['attr'=>array(
                         "class"=>"form-control btn btn-success"
                     )]);
        }
       
                
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MesaEntrada',
            'gestion'=>null
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
