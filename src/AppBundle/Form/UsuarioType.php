<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UsuarioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $password = $options['contrasenia'];
        
        $builder
                ->add('iup', TextType::class,array(
            "label"=>"Ej: usuario1:","attr"=> array(
               "class"=>"form-exp form-control" ,
               "placeholder"=>"usuario1"
                )
            ))
                ->add('email', EmailType::class, array(
                 "label"=>"", "attr"=>array(
                  "class"=>"form-exp form-control",
                  "placeholder"=>"ejemplo@ejemplo.com"
                 )
            ))          

                ->add('role', ChoiceType::class,  array(
                       
                        "placeholder" => "--Seleccione--",
                        "attr"=>[
                            "class"=>"form-control"],
                        'choices'  => array(
                            'Usuario' => 'ROLE_USER',
                            'Administrador' => 'ROLE_ADMIN'
                      )
                    ))
                
                ->add('contrasenia', PasswordType::class, array(
                 "label"=>"Contraseña: ", "attr"=>array(
                  "class"=>"form-exp form-control",
                     "placeholder"=>"Contraseña"
                 )
            ))
                ->add('persona', EntityType::class,[
                    "class"=>'AppBundle:Persona',
                    "placeholder" => "--Seleccione--",
                    "label"=>"Persona gestionante",
                    "attr"=>[
                        "class"=>"form-control",
                        "placeholder"=>"Chamorro, Lucas"
                    ]
                ])
                
//                ->add('Aceptar', SubmitType::class,array("attr"=> array(
//            "class"=>"form-submit btn btn-primary" 
//        )))
            ;
        
        if($password != null){
             $builder
                     ->add('contrasenia', TextType::class, array(
                 "label"=>"Contraseña: ", "attr"=>array(
                  "class"=>"form-exp form-control",
                     "placeholder"=>"Contraseña"
                 )
            ))                   
                     ->add('Aceptar', SubmitType::class,
                     ['attr'=>array(
                         "class"=>"form-control btn btn-success"
                     )]);
        }
        
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuario',
            'contrasenia'=>null
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
