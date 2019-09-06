<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PersonaFilterType extends AbstractType implements EmbeddedFilterTypeInterface {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

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
        $builder->add('apellido', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':apellido'));
                    $qb->setParameter('apellido', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Ingrese un apellido...']
        ));
        $builder->add('nombre', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':nombre'));
                    $qb->setParameter('nombre', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Ingrese un nombre...']
        ));
        $builder->add('dni', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\NumberFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':numeroDocumento'));
                    $qb->setParameter('numeroDocumento', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Ingrese un DNI']
        ));
        $builder->add('cargo', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':cargo'));
                    $qb->setParameter('cargo', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Ingrese un cargo...']
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
        return 'persona_filter';
    }

}
