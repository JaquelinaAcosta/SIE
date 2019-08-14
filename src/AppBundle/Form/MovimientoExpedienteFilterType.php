<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\Query\Expr\From;


class MovimientoExpedienteFilterType extends AbstractType implements EmbeddedFilterTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        $builder->add('usuario', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':usuario'));
                    $qb->setParameter('usuario', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Buscar por nombre de usuario...'
            ]
        ));
        
        $builder->add('tipoSalida', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\ChoiceFilterType', array(
            'placeholder'=>'--Seleccione--',
            'attr' => [
                'class' => 'form-control'
            ],
            'choices' => array(
                'Interno' => 'Interno',
                'Externo' => 'Externo',
                'Archivado' => 'Archivado'
            )
        ));
            
         $builder->add('fecha', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\DateRangeFilterType', array(
            'label' => 'RANGO DE FECHA',
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
            
        $builder->add('filter', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Filtrar',
            'attr' => ['class' => 'btn btn-primary']
            ));
        
        $builder->add('reset', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Reiniciar',
            'attr' => ['class' => 'btn btn-secondary']
        ));
        
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'role' => null,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lugarfisico_filter';
    }


}
