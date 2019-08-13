<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;

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
//        $builder->add('fechaInicio', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
//            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
//                if (!empty($values['value'])) {
//                    $qb = $filterQuery->getQueryBuilder();
//                    $qb->andWhere($filterQuery->getExpr()->like($field, ':fechaInicio'));
//                    $qb->setParameter('fechaInicio', '%' . $values['value'] . '%');
//                }
//            },
//            'label' => false,
//            'attr' => [
//                'class' => 'datepicker form-control',
//                'placeholder' => 'Seleccione una fecha'
//            ]
//        ));

        $builder->add('fechaInicio', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\DateRangeFilterType', array(
            'label' => 'RANGO FECHA DE INICIO',
            'left_date_options' => array(
                'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                    if (!empty($values['value'])) {
                        $qb = $filterQuery->getQueryBuilder();
                        $qb->andWhere($filterQuery->getExpr()->gte($field, '\'' . $values['value']->format("Y-m-d H:i:s") . '\''));
                    }
                },
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'label' => 'FECHA DESDE',
                'attr' => array(
                    'class' => 'datepicker form-control',
                    'placeholder' => 'DD-MM-YYYY'
                ),
                'empty_data' => function () {
                    $fecha = new \DateTime('today');
                    $fecha->sub(new \DateInterval('P23D'));
                    return $fecha->format('d-m-Y');
                },
            ),
            'right_date_options' => array(
                'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                    if (!empty($values['value'])) {
                        $qb = $filterQuery->getQueryBuilder();
                        $qb->andWhere($filterQuery->getExpr()->lte($field, '\'' . $values['value']->format("Y-m-d H:i:s") . '\''));
                    }
                },
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'label' => 'FECHA HASTA',
                'attr' => array(
                    'class' => 'datepicker form-control',
                    'placeholder' => 'DD-MM-YYYY'
                ),
                'empty_data' => function () {
                    $fecha = new \DateTime('today');
                    $fecha->add(new \DateInterval('P7D'));
                    return $fecha->format('d-m-Y');
                },
            )
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


        $builder->add('estado', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\ChoiceFilterType', array(
            'placeholder'=>'--Seleccione--',
            'attr' => [
                'class' => 'form-control'
            ],
            'choices' => array(
                'Visto' => 'VISTO',
                'Nuevo' => 'NUEVO'
            )
        ));
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
        return 'expediente_filter';
    }

}
