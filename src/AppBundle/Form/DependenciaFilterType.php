<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;

class DependenciaFilterType extends AbstractType implements EmbeddedFilterTypeInterface {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('descripcion', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':descripcion'));
                    $qb->setParameter('descripcion', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Sub dirección de..']
        ));


        $builder->add('dependenciaPadre', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EntityFilterType', array(
            'class' => 'AppBundle\Entity\Dependencia',
            'placeholder' => '--Seleccione--',
            'query_builder' => function (EntityRepository $repositorio) {
                return $repositorio
                                ->createQueryBuilder('e')
                                ->where('e.estado IS NOT NULL')
                                ->orderBy('e.responsable', 'ASC');
            },
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->eq('d.descripcion', ':dependenciaPadre'));
                    $qb->setParameter('dependenciaPadre', '' . $values['value'] . '');
                }
            },
            'attr' => ['class' => 'form-control']
        ));


        $builder->add('nivel', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\ChoiceFilterType', array(
            'placeholder' => '--Seleccione--',
            'attr' => [
                'class' => 'form-control'
            ],
            'choices' => array(
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4',
                '5' => '5',
                '6' => '6',
                '7' => '7',
                '8' => '8',
                '9' => '9',
                '10' => '10'
            )
        ));

        $builder->add('estado', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\ChoiceFilterType', array(
            'placeholder' => '--Seleccione--',
            'attr' => [
                'class' => 'form-control'
            ],
            'choices' => array(
                'Habilitado' => 'HABILITADO',
                'Deshabilitado' => 'DESHABILITADO'
            )
        ));

        $builder->add('responsable', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteFilterType', array(
            'class' => 'AppBundle:Persona',
            'required' => false,
            'attr' => [
                'class' => 'form-control',
                'placeholder' => 'Escriba parte del nombre y seleccione'
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
        return 'dependencia_filter';
    }

}
