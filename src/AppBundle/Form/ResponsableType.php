<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class ResponsableType extends AbstractType {
    
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {     
              $builder
                ->add('usuario', EntityType::class, [
                    'class' => 'AppBundle:Usuario',
                    'label' => false,
                    'placeholder' => '--Seleccione--',
                    'attr' => [
                        'class' => 'user form-control'
                    ]
             ])
                ->add('usuario', EntityType::class, [
                    'class' => 'AppBundle:Usuario',
                    'label' => false,
                    'placeholder' => '--Seleccione--',
                    'attr' => [
                        'class' => 'user form-control'
                    ]
             ]);

    }

/**
     * {@inheritdoc}
     */

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Responsable'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'appbundle_responsable';
    }

}
