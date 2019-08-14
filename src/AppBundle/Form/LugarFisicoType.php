<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
class LugarFisicoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       if($options['movimiento_lugar'] == null){
           $builder                
                ->add('tipo', TextType::class, array(
                    "label" => "Ingrese un tipo", "attr" => array(
                        "class" => "form-name form-control",
                        "placeholder" => "Ingrese un tipo"
                    )
                ))
                ->add('descripcion', TextType::class, array(
                    "label" => "ingrese una descripción", "attr" => array(
                        "class" => "form-name form-control",
                        "placeholder" => "Ingrese una descripción"
                    )
                ))
                ->add('acceso', TextType::class, array(
                    "label" => "Ingrese el acceso", "attr" => array(
                        "class" => "form-name form-control",
                        "placeholder" => "Ingrese un acceso"
                    )
                ))              
                ->add('Aceptar', SubmitType::class, array("attr" => array(
                        "class" => "form-submit btn btn-primary"
                    )
                ));
        
        if($options['edit_mode'] != null)
        {
            $builder->add('dependencia', EntityType::class, array(
                    "label" => false,
                    "placeholder" => "--Seleccione--",
                    'query_builder' => function (EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                    ->where('u.estado IS NOT NULL')
                                    ->orderBy('u.descripcion', 'ASC');
                            },
                    "class" => 'AppBundle:Dependencia', "attr" => array(
                        "class" => "form-control"
                    ))
                );
        }
       } else{
           $builder->add('tipo', EntityType::class, array(
                    "label" => false,
                    "placeholder" => "--Seleccione--",
                    'query_builder' => function (EntityRepository $er) {
                                return $er->createQueryBuilder('u')
                                    ->orderBy('u.descripcion', 'ASC');
                            },
                    "class" => 'AppBundle:LugarFisico', "attr" => array(
                        "class" => "form-control"
                    ))
                );
       }
        
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\LugarFisico',
            'edit_mode'=>null,
            'movimiento_lugar'=>null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lugarfisico';
    }


}
