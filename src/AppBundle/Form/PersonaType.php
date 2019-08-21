<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class PersonaType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $role = $options['role'];
        $movimento_persona = $options['movimiento_persona'];

        if ($movimento_persona != null) {
            $builder->add('nombre', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteType', array(
                'class' => 'AppBundle:Persona',
                'label' => false,
                'required' => false,
                'attr' => array(
                    'class' => 'form form-control',
                    'placeholder' => 'Escriba parte del nombre y seleccione una opción'
                )
            ));
        } else {
            $builder
                    ->add('nombre', TextType::class, array(
                        "label" => "Nombre:", "attr" => array(
                            "class" => "form-name form-control",
                            "placeholder" => "Ingrese el nombre"
                        )
                    ))
                    ->add('apellido', TextType::class, array(
                        "label" => "Apellido:", "attr" => array(
                            "class" => "form-name form-control",
                            "placeholder" => "Apellido"
                        )
                    ))
                    ->add('dni', TextType::class, array(
                        "label" => "DNI:", "attr" => array(
                            "class" => "form-name form-control",
                            "placeholder" => "Ej:40323795"
                        )
                    ))
                    ->add('cargo', TextType::class, array(
                        "label" => "Cargo:", "attr" => array(
                            "class" => "form-name form-control",
                            "placeholder" => "Cargo"
                        )
                    ))
                    ->add('Aceptar', SubmitType::class, array("attr" => array(
                            "class" => "form-submit btn btn-primary"
                        )
            ));
            if ($role != null) {
                $builder->add('dependencia', EntityType::class, array(
                    "label" => false,
                    "placeholder" => "--Seleccione--",
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('d')
                                        ->where("d.estado IS NOT NULL");
                    },
                    "class" => 'AppBundle:Dependencia', "attr" => array(
                        "class" => "form-control"
                    ))
                );
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Persona',
            'role' => null,
            'movimiento_persona' => null,
            'error_mapping' => array(
                'validarDNI' => 'dni'
            ),
          
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'persona';
    }

}
