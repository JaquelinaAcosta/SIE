<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;

class ExpedienteFilterType extends AbstractType implements EmbeddedFilterTypeInterface {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nroExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':nroExpediente'));
                    $qb->setParameter('nroExpediente', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Ingrese el número de expediente'
            ]
        ));
         $builder->add('fechaInicio', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':fechaInicio'));
                    $qb->setParameter('fechaInicio', '%' . $values['value'] . '%');
                }
            },
            'label'=>false,
            'attr' => [
                'class' => 'datepicker form-control',
                'placeholder' => 'Seleccione una fecha'
            ]
        ));    
        $builder->add('tipo', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':tipo'));
                    $qb->setParameter('tipo', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Ejemplo: Jurídico, Varios, Etc.'
            ]
        ));
//        $builder->add('nroExpediente', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteFilterType', array(
//            'class' => 'AppBundle:Expediente',
//            'required' => false,
//            'attr' => [
//                'class' => 'form-control',
//                'placeholder' => 'Ingrese parte del número y seleccione'
//            ],
//            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
//                if (!empty($values['value'])) {
//                    $qb = $filterQuery->getQueryBuilder();
//                    $qb->andWhere($filterQuery->getExpr()->like($field, ':nroExpediente'));
//                    $qb->setParameter('nroExpediente', '%' . $values['value'] . '%');
//                }
//            }
//        ));
        $builder->add('tema', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteFilterType', array(
            'class' => 'AppBundle:Tema',
            'required' => false,
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Ingrese parte del código y seleccione'
            ]
        ));

        $builder->add('filter', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Filtrar',
            'attr' => ['class' => 'btn btn-primary']
        ));
        $builder->add('reset', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Reiniciar',
            'attr' => ['class' => 'btn btn-danger']
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
        return 'expediente_filter';
    }

}
