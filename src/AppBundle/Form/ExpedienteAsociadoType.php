<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\ExpedienteAsociado;

class ExpedienteAsociadoType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $expedientePadre_id = $options['expediente_id'];

        $builder
                ->add('expedienteAsociado', EntityType::class, array(
                    "class" => 'AppBundle:Expediente',
                    'query_builder' => function(EntityRepository $er ) use ($expedientePadre_id) {
                        return $er->createQueryBuilder('w')
                                ->leftJoin(ExpedienteAsociado::class, "ea", "WITH",
                                        "w.id = ea.expedienteAsociado")
                                ->where('ea.id IS NULL')
                                ->andWhere('w.id != :expediente_id')
                                ->setParameter('expediente_id', $expedientePadre_id);
                    },
                    "placeholder" => "--Seleccione--",
                    "label" => "Nro. de Expediente Asociado:", "attr" => array(
                        "class" => "form-exp form-control"
                    )
                ))
                ->add('ordenAsociacion', TextType::class, array(
                    "label" => "Orden Asociación", "attr" => array(
                        "class" => "form-exp form-control",
                        "placeholder" => "1, 2, ..."
                    )
                ))
                ->add('Aceptar', SubmitType::class, array("attr" => array(
                        "class" => "form-submit btn btn-primary"
                    )
                ))
        ;
    }

/**
     * {@inheritdoc}
     */

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ExpedienteAsociado',
            'expediente_id' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'expedienteasociado';
    }

}
