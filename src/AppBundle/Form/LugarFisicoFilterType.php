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


class LugarFisicoFilterType extends AbstractType implements EmbeddedFilterTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $role = $options['role'];
        $builder->add('tipo', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':tipo'));
                    $qb->setParameter('tipo', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control','placeholder'=>'Armario, Cajón..']
        ));
            
        
        $builder->add('descripcion', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':descripcion'));
                    $qb->setParameter('descripcion', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control','placeholder'=>'Metálico, De madera...']
        ));
                    
        if($role != 'ROLE_USER'){
            $builder->add('dependencia', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EntityFilterType', array(
                'class' => 'AppBundle\Entity\Dependencia',
                'placeholder'=>'--Seleccione--',
                'query_builder' => function (EntityRepository $repositorio) {
                    return $repositorio
                                    ->createQueryBuilder('e')
                                    ->from(\AppBundle\Entity\LugarFisico::class, "l")
                                    ->innerJoin(\AppBundle\Entity\Ubicacion::class, "u", "WITH",
                                    "e.id = u.dependencia")
                                    ->andWhere('u.id = l.id')
                                    ->orderBy('e.descripcion', 'ASC');
                },
                'attr'=>[
                    'class'=>'form-control',
                    'placeholder'=>'Escriba parte del nombre y seleccione'
                ]


            )); 
        }   
       
            
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
