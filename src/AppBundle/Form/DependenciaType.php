<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class DependenciaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('descripcion', TextType::class,[
                    "label"=>false,
                    "attr"=>[
                        "class"=>'form-control',
                        "placeholder"=>"Ingrese descripción"
                    ]
                ])
                ->add('dependenciaPadre', TextType::class,[                  
                    "attr"=>[
                        "label"=>false,
                        "class"=>"form-control",
                        "placeholder"=>"Ingrese la dependecia padre"
                    ]
                ])
                ->add('responsable', EntityType::class,[
                    "class"=>'AppBundle:Usuario',
                    "placeholder"=>'--Seleccione--',
                    "label"=>false,
                    "attr"=>[
                        "class"=>'form-control',
                        "placeholder"=>"Ingrese su responsable"
                    ]
                ])
                ->add('nivel', TextType::class,[
                    "label"=>false,
                    "attr"=>[
                        "class"=>'form-control',
                        "placeholder"=>"Ingrese el nivel"
                    ]
                ])
                ->add('mesaentrada', MesaEntradaType::class,array(
                            "label"=>false
                    
                        ))
                ->add('Aceptar', SubmitType::class, array("attr" => array(
                        "class" => "aceptar form-submit btn btn-success"
                 )));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Dependencia'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_dependencia';
    }


}
