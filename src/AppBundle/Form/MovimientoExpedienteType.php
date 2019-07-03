<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MovimientoExpedienteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('expediente', TextType::class,array(
            "label"=>"Nro. de Expediente: ","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"00000-000000000-0"
            )
        ))
                ->add('ubicacion', TextType::class, array(
            "label"=>"Ubicación: ","attr"=> array(
               "class"=>"form-name form-control" 
            )
        ))
                ->add('fojas', TextType::class,array(
            "label"=>"Nro. de fojas:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"1...2..."
            )
        ))
                ->add('usuario', TextType::class,array(
            "label"=>"Usuario: ","attr"=> array(
               "class"=>"form-name form-control" 
            )
        ))
                ->add('fecha', DateType::class,array(
            "label"=>"Fecha:"
        ))
                ->add('comentario', TextareaType::class, array(
            "label"=>"Comentario: ","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Comentario..."
            )
        ))
                ->add('observacion', TextareaType::class, array(
            "label"=>"Observación: ","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Observación..."
            )
        ))
                ->add('tipoSalida', TextType::class, array(
            "label"=>"Tipo de Salida: ","attr"=> array(
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
            'data_class' => 'AppBundle\Entity\MovimientoExpediente'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_movimientoexpediente';
    }


}
