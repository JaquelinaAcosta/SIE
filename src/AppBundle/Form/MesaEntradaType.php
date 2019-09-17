<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Doctrine\ORM\EntityRepository;

class MesaEntradaType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $gestion = $options['gestion'];
        $movimiento = $options['movimiento'];
        $dependenciaId = $options['dependencia_id'];

        if ($movimiento != null) {
            if ($gestion == 'externo') {
                $builder->add('dependencia', EntityType::class, array(
                    'query_builder' => function(EntityRepository $er ) use ($dependenciaId) {
                        return $er->createQueryBuilder('w')
                                        ->where('w.fechaBaja IS NULL')
                                        ->andWhere('w.id!=:id')
                                        ->orderBy('w.descripcion', 'ASC')
                                        ->setParameter('id', $dependenciaId);

                    },
                    "label" => false,
                    "placeholder" => "--Seleccione--",
                    "class" => 'AppBundle:Dependencia', "attr" => array(
                        "class" => "form-control"
                    ))
                );
            } else {
                $builder->add('dependencia', EntityType::class, array(
                    'query_builder' => function(EntityRepository $er )use($dependenciaId) {
                        return $er->createQueryBuilder('d')
                                        ->where('d.id = :dependencia')
                                        ->andWhere('d.fechaBaja IS NULL')
                                        ->orderBy('d.descripcion', 'ASC')
                                        ->setParameter('dependencia', $dependenciaId);
                    },
                    "label" => false,
                    "placeholder" => "--Seleccione--",
                    "class" => 'AppBundle:Dependencia', "attr" => array(
                        "class" => "form-control"
                    ))
                );
            }
        } else {
            $builder
                    ->add('responsables', CollectionType::class, [
                        'entry_type' => ResponsableType::class,
                        'label' => false,
                        'entry_options' => [
                            'label' => false,
                            'dependencia_id' => null
                        ],
                        'prototype' => true,
                        'allow_add' => true,
                        'allow_delete' => true,
                        'by_reference' => false,
                    ])
                    ->add('codigoExpediente', TextType::class, array(
                        "label" => "Nro. de Expediente:", "attr" => array(
                            "class" => "form-exp form-control",
                            "placeholder" => "Código de expediente..."
                        )
            ))          
                     ->add('telefono', TextType::class, array(
                        "label" => "Teléfono:", "attr" => array(
                            "class" => "form-exp form-control",
                            "placeholder" => ""
                        )
            ));
        }

        if ($gestion != null && $options['quitar_guardar'] == null) {
            $builder->add('Guardar', SubmitType::class, ['attr' => array(
                    "class" => "form-control btn btn-success"
            )]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MesaEntrada',
            'gestion' => null,
            'movimiento' => null,
            'dependencia_id' => null,
            'quitar_guardar' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'mesaentrada';
    }

}
