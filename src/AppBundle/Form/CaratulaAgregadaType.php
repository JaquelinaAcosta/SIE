<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CaratulaAgregadaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('expediente', TextType::class,array(
            "label"=>"Nro. de Expediente:","attr"=> array(
               "class"=>"form-exp form-control" ,
               "placeholder"=>"00000-000000000-0"
            )
        ))
                ->add('tema', TextType::class,array(
            "label"=>"Tema:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Tema..."
            )
        ))
                ->add('concepto', TextType::class,array(
            "label"=>"Concepto:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Concepto..."
            )
        ))
                ->add('fojas', TextType::class,array(
            "label"=>"Cantidad de Fojas:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"1, 2, 3.."
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
            'data_class' => 'AppBundle\Entity\CaratulaAgregada'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_caratulaagregada';
    }


}
