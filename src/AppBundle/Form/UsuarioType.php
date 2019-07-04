<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('iup', TextType::class,array(
            "label"=>"Nombre de Usuario:","attr"=> array(
               "class"=>"form-exp form-control" ,
               "placeholder"=>"Nombre"
                )
            ))
                ->add('roles', TextType::class,array(
                "label"=>"Rol: ", "attr"=>array(
                "class"=>"form-exp form-control",
                "placeholder"=>"Rol"
                )
            ))
                ->add('persona', TextType::class, array(
                 "label"=>"Ubicación del Expediente: ", "attr"=>array(
                  "class"=>"form-exp form-control" 
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
            'data_class' => 'AppBundle\Entity\Usuario'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_usuario';
    }


}
