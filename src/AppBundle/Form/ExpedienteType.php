<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
                "placeholder"=>"--Seleccione--",
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
                ->add('tema', TextType::class,array(
            "label"=>"Tema:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Ej:01983"
            )
        ))
                ->add('fojas', TextType::class,array(
            "label"=>"Nro. de fojas:","attr"=> array(
               "class"=>"align-center form-control" ,
               "placeholder"=>"1...2..."
            )
        ))
                ->add('tipo', TextareaType::class,array(
                "label"=>"Tipo:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"¿Que es?"
            )
        ))
                 ->add('ubicacionActual', ChoiceType::class,array(                
                "choices"=>array(
                "--Seleccione--"=>0,
                "Mesa de Entrada"=>1,
                "Persona"=>2,
                "Lugar Físico"=>3
                ),
            "label"=>false,"attr"=> array(
               "class"=>"form-name form-control"
            )
        ))
                
                ->add('fechaInicio', TextType::class,array(
            "label"=>false,"attr"=>array(
                "class"=>'datepicker form-control',
                "placeholder"=>'MM-DD-AAAA'
            )
            
        ))
                ->add('fechaFin', TextType::class,array(
            "label"=>false,"attr"=>array(
                "class"=>'datepicker form-control',
                "placeholder"=>'MM-DD-AAAA'
                
            )
            
        ))
               
                ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
                    $persona = $event->getData();
                    
                    
        })
        
                ->add('Guardar', SubmitType::class,array("attr"=> array(
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
