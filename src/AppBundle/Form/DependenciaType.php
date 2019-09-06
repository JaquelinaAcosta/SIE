<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Persona;
use Doctrine\ORM\EntityRepository;


class DependenciaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $gestion = $options['gestion'];
        
        $builder
                ->add('descripcion', TextType::class,[
                    "label"=>false,
                    "attr"=>[
                        "class"=>'form-control',
                        "placeholder"=>"Ingrese descripción"
                    ]
                ])
                ->add('dependenciaPadre', EntityType::class,[      
                    "class"=>'AppBundle:Dependencia',
                    'query_builder' => function(EntityRepository $er ) {
                        return $er->createQueryBuilder('w')
                                        ->where('w.fechaBaja IS NULL')
                                        ->orderBy('w.descripcion', 'ASC');;
                    },
                    "attr"=>[
                        "label"=>false,
                        "class"=>"form-control",
                        "placeholder"=>"Ingrese la dependecia padre"
                    ]
                ])
                ->add('responsable', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteType', array(
                    'class' => 'AppBundle:Persona',
                    'label' => 'Responsable',
                    'required' => false,
                    'attr' => array(
                        'class'=>'form form-control',
                        'placeholder' => 'Escriba parte del nombre y seleccione una opción'
                    )
                ))
                ->add('nivel', TextType::class,[
                    "label"=>false,
                    "attr"=>[
                        "class"=>'form-control',
                        "placeholder"=>"Ingrese el nivel"
                    ]
                ])
               
                
                ->add('Aceptar', SubmitType::class, array("attr" => array(
                        "class" => "aceptar form-submit btn btn-primary"
                 )));      
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Dependencia',
            'gestion'=>null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dependencia';
    }


}
