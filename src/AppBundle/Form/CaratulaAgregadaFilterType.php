<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\ORM\QueryBuilder;

class CaratulaAgregadaFilterType extends AbstractType implements EmbeddedFilterTypeInterface {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
            
        $builder->add('tema', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere(
                            $filterQuery->getExpr()->orX(
                                    $filterQuery->getExpr()->like('t.codigo', ':codigo')
                            )
                    )->setParameter('codigo', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Ingrese el codigo del tema...']
        ));
            
        $builder->add('descripcionTema', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere(
                            $filterQuery->getExpr()->orX(
                                    $filterQuery->getExpr()->like('t.descripcion', ':descripcion')
                            )
                    )->setParameter('descripcion', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Ingrese el codigo del tema...']
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
        return 'caratula_filter';
    }

}
