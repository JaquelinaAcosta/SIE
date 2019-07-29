<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CaratulaAgregadaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                
                ->add('tema', EntityType::class, array(
                    "label" => "Tema:",
                    "class"=>'AppBundle:Tema', "attr" => array(
                    "class" => "form-name form-control",
                    "placeholder" => "Ej:01983"
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
