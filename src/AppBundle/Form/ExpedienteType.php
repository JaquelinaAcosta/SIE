<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class ExpedienteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('nroExpediente', TextType::class,array(
            "label"=>"Nro. de Expediente:","attr"=> array(
               "class"=>"form-exp form-control" ,
               "placeholder"=>"00000-000000000-0"
            )
        ))
                ->add('iniciadorDependencia', EntityType::class,array(
                "label"=>"Dependencia:",
                "class"=>'AppBundle:Dependencia',"attr"=> array(
               "class"=>"form-control"
            ))
        )
                ->add('concepto', TextareaType::class, array(
            "label"=>"Concepto: ","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Concepto..."
            )
        ))
//                ->add('tema', TextType::class,array(
//            "label"=>"Tema:","attr"=> array(
//               "class"=>"form-name form-control" ,
//               "placeholder"=>"Tema..."
//            )
//        ))
                ->add('fojas', TextType::class,array(
            "label"=>"Nro. de fojas:","attr"=> array(
               "class"=>"align-center form-control" ,
               "placeholder"=>"1...2..."
            )
        ))
                ->add('tipo', TextType::class,array(
            "label"=>"Tipo:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"¿Que es?"
            )
        ))
                 ->add('ubicacionActual', TextType::class,array(
            "label"=>"Ubicación Actual:","attr"=> array(
               "class"=>"form-name form-control"
            )
        ))
                
                ->add('fechaInicio', TextType::class,array(
            "label"=>false
            
        ))
                ->add('fechaFin', TextType::class,array(
            "label"=>false
            
        ))
               
                ->add('Guardar', SubmitType::class,array("attr"=> array(
               "class"=>"form-submit btn btn-primary" 
            )
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Expediente'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_expediente';
    }


}
