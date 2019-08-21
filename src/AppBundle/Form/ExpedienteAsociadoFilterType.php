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

         $builder->add('codigoExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like('e.codigoExpediente', ':codigoExpediente'));
                    $qb->setParameter('codigoExpediente', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'cod form-control',
            ]
        ));
        $builder->add('numeroExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like('e.numeroExpediente', ':numeroExpediente'));
                    $qb->setParameter('numeroExpediente', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'num form-control',
            ]
        ));
        $builder->add('digitoExpediente', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like('e.digitoExpediente', ':digitoExpediente'));
                    $qb->setParameter('digitoExpediente', '%' . $values['value'] . '%');
                }
            },
            'attr' => [
                'class' => 'dig form-control',
            ]
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
                'placeholder' => 'Buscar por descripcion...']
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
