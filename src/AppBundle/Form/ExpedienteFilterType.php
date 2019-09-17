<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Doctrine\ORM\EntityRepository;

class ExpedienteFilterType extends AbstractType implements EmbeddedFilterTypeInterface {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        if ($options['role'] != null) {
            $builder->add('dependencia', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EntityFilterType', array(
                'class' => 'AppBundle\Entity\Dependencia',
                'placeholder' => '--Seleccione--',
                'query_builder' => function (EntityRepository $repositorio) {
                    return $repositorio
                                    ->createQueryBuilder('e')
                                    ->where("e.fechaBaja IS NULL")
                                    ->orderBy('e.descripcion', 'ASC');
                },
                'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                    if (!empty($values['value'])) {
                        $qb = $filterQuery->getQueryBuilder();
                        $qb->andWhere($filterQuery->getExpr()->eq('d.descripcion', ':dependencia'));
                        $qb->setParameter('dependencia', '' . $values['value'] . '');
                    }
                },
                'attr' => ['class' => 'form-control']
            ));
        }
        $builder->add('codigoExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':codigoExpediente'));
                    $qb->setParameter('codigoExpediente', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'cod form-control',
                "maxlength"=>5
            ]
        ));
        $builder->add('numeroExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':numeroExpediente'));
                    $qb->setParameter('numeroExpediente', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'num form-control',
                "maxlength"=>7
            ]
        ));
        $builder->add('digitoExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':digitoExpediente'));
                    $qb->setParameter('digitoExpediente', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'dig form-control',
                "maxlength"=>1
            ]
        ));
        $builder->add('fechaInicio', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\DateRangeFilterType', array(
            'label' => 'RANGO FECHA DE INICIO',
            'left_date_options' => array(
                'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                    if (!empty($values['value'])) {
                        $qb = $filterQuery->getQueryBuilder();
                        $qb->andWhere($filterQuery->getExpr()->gte($field, '\'' . $values['value']->format("d-m-Y") . '\''));
                    }
                },
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'label' => 'FECHA INICIO DESDE',
                'attr' => array(
                    'class' => 'datepicker form-control',
                    'placeholder' => 'DD-MM-YYYY'
                ),
//                'empty_data' => function () {
//                    $fecha = new \DateTime('today');
//                    $fecha->sub(new \DateInterval('P23D'));
//                    return $fecha->format('d-m-Y');
//                },
            ),
            'right_date_options' => array(
                'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                    if (!empty($values['value'])) {
                        $qb = $filterQuery->getQueryBuilder();
                        $qb->andWhere($filterQuery->getExpr()->lte($field, '\'' . $values['value']->format("d-m-Y") . '\''));
                    }
                },
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'label' => 'FECHA INICIO HASTA',
                'attr' => array(
                    'class' => 'datepicker form-control',
                    'placeholder' => 'DD-MM-YYYY'
                ),
//                'empty_data' => function () {
//                    $fecha = new \DateTime('today');
//                    $fecha->add(new \DateInterval('P7D'));
//                    return $fecha->format('d-m-Y');
//                },
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
         $builder->add('concepto', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':concepto'));
                    $qb->setParameter('concepto', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'form-control',
                'placeholder' => ''
            ]
        ));

        $builder->add('estado', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\ChoiceFilterType', array(
            'placeholder' => '--Seleccione--',
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
            'validation_groups' => array('filtering'), // avoid NotBlank() constraint-related message
            'role' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'expediente_filter';
    }

}
