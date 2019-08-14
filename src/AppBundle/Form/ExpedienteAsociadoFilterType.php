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

class ExpedienteAsociadoFilterType extends AbstractType implements EmbeddedFilterTypeInterface{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('expedienteAsociado', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere(
                            $filterQuery->getExpr()->orX(
                                    $filterQuery->getExpr()->like('e.nroExpediente', ':expedienteAsociado')
                            )
                    )->setParameter('expedienteAsociado', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Ingrese el codigo del tema...']
        ));
        
            
       $builder->add('descripcion', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
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
//            
        
//           $builder->add('expedienteAsociado', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
//            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
//                if (!empty($values['value'])) {
//                    $qb = $filterQuery->getQueryBuilder();
//                    $qb->andWhere($filterQuery->getExpr()->like($field, ':expedienteAsociado'));
//                    $qb->setParameter('expedienteAsociado', '%' . $values['value'] . '%');
//                }
//            },
//            'attr' => ['class' => 'form-control',
//                'placeholder' => 'Búsqueda por concepto...']
//        ));    
//            
            
        $builder->add('filter', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Filtrar',
            'attr' => ['class' => 'btn btn-primary']
        ));

        $builder->add('reset', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Reiniciar',
            'attr' => ['class' => 'btn btn-secondary']
        ));


//        $expedientePadre_id = $options['expediente_id'];
    

//        $builder
//                ->add('expedienteAsociado', EntityType::class, array(
//                    "class" => 'AppBundle:Expediente',
//                    'query_builder' => function(EntityRepository $er ) use ($expedientePadre_id) {
//                        return $er->createQueryBuilder('w')
//                                ->leftJoin(ExpedienteAsociado::class, "ea", "WITH",
//                                        "w.id = ea.expedienteAsociado")
//                                ->where('ea.id IS NULL')
//                                ->andWhere('w.id != :expediente_id')
//                                ->setParameter('expediente_id', $expedientePadre_id);
//                    },
//                    "placeholder" => "--Seleccione--",
//                    "label" => "Nro. de Expediente Asociado:", "attr" => array(
//                        "class" => "form-exp form-control"
//                    )
//                ))
//                ->add('ordenAsociacion', TextType::class, array(
//                    "label" => "Orden Asociación", "attr" => array(
//                        "class" => "form-exp form-control",
//                        "placeholder" => "1, 2, ..."
//                    )
//                ))
//                ->add('Aceptar', SubmitType::class, array("attr" => array(
//                        "class" => "form-submit btn btn-primary"
//                    )
//                ))
//        ;
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
         return 'asociado_filter';
    }

}
