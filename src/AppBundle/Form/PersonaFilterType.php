<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type as Filters;

class PersonaFilterType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('apellido', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':apellido'));
                    $qb->setParameter('apellido', '%' . $values['value'] . '%');
                }
            }
        ));
        $builder->add('nombre', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':nombre'));
                    $qb->setParameter('nombre', '%' . $values['value'] . '%');
                }
            }
        ));     
        $builder->add('dni', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\NumberFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':numeroDocumento'));
                    $qb->setParameter('numeroDocumento', '%' . $values['value'] . '%');
                }
            }
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
        return 'persona_filter';
    }

}
