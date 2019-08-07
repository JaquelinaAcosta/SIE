<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;
//use Doctrine\ORM\Query\Expr;
//use Doctrine\ORM\QueryBuilder;

//use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;


class DependenciaFilterType extends AbstractType implements EmbeddedFilterTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
       // $gestion = $options['gestion'];
        
        
        $builder->add('descripcion', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':descripcion'));
                    $qb->setParameter('descripcion', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control']
        ));
            
            
        $builder->add('dependenciaPadre', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EntityFilterType', array(
            'class' => 'AppBundle\Entity\Dependencia',
            'query_builder' => function (EntityRepository $repositorio) {
                return $repositorio
                                ->createQueryBuilder('e')
                                ->orderBy('e.responsable', 'ASC');
            },
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->innerJoin('p.dependenciaPadre', 'd', Join::WITH, 'd.id IS NOT NULL');
                    $qb->andWhere($filterQuery->getExpr()->eq('d.descripcion', ':dependenciaPadre'));
                    $qb->setParameter('dependenciaPadre', '' . $values['value'] . '');
                }
            }
        ));
            
            
        $builder->add('nivel', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\NumberFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':nivel'));
                    $qb->setParameter('nivel', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control']
        ));
            
        $builder->add('archivado', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':archivado'));
                    $qb->setParameter('archivado', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control']
        ));
            
        
//        $builder->add('responsable', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteFilterType', array(
//            'class' => 'AppBundle:Dependencia',
//            'required' => false,
//            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
//                if (!empty($values['value'])) {
//                    $qb = $filterQuery->getQueryBuilder();
//                    $qb->leftJoin($qb->getRootAlias() . '.responsable', 'o', Join::WITH, 'o.id IS NOT NULL');
//                    $qb->andWhere($filterQuery->getExpr()->eq('CONCAT (o.apellido, ' . $filterQuery->getExpr()->literal(', ')
//                                    . ', o.nombre, '
//                                    . ')', ':responsable'));
//                    $qb->setParameter('responsable', '' . $values['value'] . '');
//                }
//            }
//        ));
        
        $builder->add('responsable', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteFilterType', array(
            'class' => 'AppBundle:Persona',
            'required' => false,
            'attr'=>[
                'class'=>'form-control'
            ]
            
        ));
        
            
        $builder->add('filter', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Filtrar',
            'attr' => ['class' => 'btn btn-primary']
            ));
        
        $builder->add('reset', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Reiniciar',
            'attr' => ['class' => 'btn btn-default']
        ));
        
    }

        
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection' => false,
            'validation_groups' => array('filtering') // avoid NotBlank() constraint-related message
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dependencia_filter';
    }


}
