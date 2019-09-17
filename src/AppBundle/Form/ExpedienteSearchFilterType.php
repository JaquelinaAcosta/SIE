<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;

;

class ExpedienteSearchFilterType extends AbstractType implements EmbeddedFilterTypeInterface {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('codigoExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere('e.codigoExpediente = :codigoExpediente');
                    $qb->setParameter('codigoExpediente', $values['value']);
                }
            },
            'required' => true,
            'attr' => [
                'class' => 'cod form-control',
                "maxlength"=>5
            ]
        ));
        $builder->add('numeroExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere('e.numeroExpediente = :numeroExpediente');
                    $qb->setParameter('numeroExpediente', $values['value']);
                }
            },
            'required' => true,
            'attr' => [
                'class' => 'num form-control',
                "maxlength"=>7
            ]
        ));
        $builder->add('digitoExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere('e.digitoExpediente = :digitoExpediente');
                    $qb->setParameter('digitoExpediente', $values['value']);
                }
            },
            'required' => true,
            'attr' => [
                'class' => 'dig form-control',
                "maxlength"=>1
            ]
        ));

        $builder->add('Buscar', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Buscar',
            'attr' => ['class' => 'btn btn-primary']
        ));
        $builder->add('Limpiar', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Reiniciar',
            'attr' => ['class' => 'btn btn-secondary']
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'expediente_fast_filter';
    }

}
