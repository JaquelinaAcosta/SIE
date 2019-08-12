<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextAreaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Form\PersonaType;
use AppBundle\Entity\Usuario;
use AppBundle\Entity\Persona;

class ResolucionType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
//                ->add('expediente', EntityType::class,array(
//            "class"=>'AppBundle:Expediente',
//            "label"=>false,"attr"=> array(
//            "class"=>"form-name form-control" ,
//            "placeholder"=>"00000-000000000-0",
//             "style"=>'display:none;'               
//            )
//        ))
                ->add('numeroResolucion', TextType::class, array(
                    "label" => false, "attr" => array(
                        "class" => "form-name form-control",
                    )
                ))
                ->add('tipo', TextType::class, array(
                    "label" => false, "attr" => array(
                        "class" => "form-name form-control"
                    )
                ))
//                ->add('usuario', EntityType::class,array(
//                    'class'=>'AppBundle:Usuario',
//            "label"=>"Usuario Responsable: ","attr"=> array(
//               "class"=>"form-name form-control" 
//            )
//        ) )
                ->add('fechaResolucion', TextType::class, array(
                    "label" => false, "attr" => array(
                        "class" => 'datepicker form-control',
                        "placeholder" => 'MM-DD-AAAA')
                ))
                ->add('observacion', TextAreaType::class, array(
                    "required"=>false,
                    "label" => false, "attr" => array(
                        "class" => 'datepicker form-control',
                        "placeholder" => 'Ingrese una observacion...')
                ))
                ->add('Aceptar', SubmitType::class, array("attr" => array(
                        "class" => "form-submit btn btn-primary"
                    )
        ));
    }

/**
     * {@inheritdoc}
     */

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Resolucion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_resolucion';
    }

}
