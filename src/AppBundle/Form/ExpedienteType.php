<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


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
               "class"=>"form-name form-control" ,
               "placeholder"=>"00000-000000000-0"
            )
        ))
                ->add('concepto', TextType::class, array(
            "label"=>"Concepto: ","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Concepto..."
            )
        ))
                ->add('fojas', TextType::class,array(
            "label"=>"Nro. de fojas:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"1...2..."
            )
        ))
                ->add('tipo', TextType::class,array(
            "label"=>"Tipo:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Nombre"
            )
        ))
                ->add('fechaInicio', DateType::class,array(
            "label"=>"Fecha de Inicio:"
        ))
                ->add('fechaFin', DateType::class,array(
            "label"=>"Fecha de Fin:"
        ))
                ->add('ubicacionActual', TextType::class,array(
            "label"=>"Ubicación Actual:","attr"=> array(
               "class"=>"form-name form-control"
            )
        ))
                ->add('iniciadorDependencia', ChoiceType::class,array(
            "label"=>"Dependencia" ,"choices"=>array("Test1,Test2"),"attr"=> array(
               "class"=>"form-name form-control"
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
