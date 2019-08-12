<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr\Join;


class LugarFisicoFilterType extends AbstractType implements EmbeddedFilterTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('tipo', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':tipo'));
                    $qb->setParameter('tipo', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control']
        ));
            
        
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
            
            
        $builder->add('filter', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Filtrar',
            'attr' => ['class' => 'btn btn-primary']
            ));
        
        $builder->add('reset', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Reiniciar',
            'attr' => ['class' => 'btn btn-danger']
        ));
            
//       if($options['movimiento_lugar'] == null){
//           $builder                
//                ->add('tipo', TextType::class, array(
//                    "label" => "Ingrese un tipo", "attr" => array(
//                        "class" => "form-name form-control",
//                        "placeholder" => "Ingrese un tipo"
//                    )
//                ))
//                ->add('descripcion', TextType::class, array(
//                    "label" => "ingrese una descripción", "attr" => array(
//                        "class" => "form-name form-control",
//                        "placeholder" => "Ingrese una descripción"
//                    )
//                ))
//                ->add('acceso', TextType::class, array(
//                    "label" => "Ingrese el acceso", "attr" => array(
//                        "class" => "form-name form-control",
//                        "placeholder" => "Ingrese un acceso"
//                    )
//                ))              
//                ->add('Aceptar', SubmitType::class, array("attr" => array(
//                        "class" => "form-submit btn btn-primary"
//                    )
//                ));
//        
//        if($options['edit_mode'] != null)
//        {
//            $builder->add('dependencia', EntityType::class, array(
//                    "label" => false,
//                    "placeholder" => "--Seleccione--",
//                    'query_builder' => function (EntityRepository $er) {
//                                return $er->createQueryBuilder('u')
//                                    ->orderBy('u.descripcion', 'ASC');
//                            },
//                    "class" => 'AppBundle:Dependencia', "attr" => array(
//                        "class" => "form-control"
//                    ))
//                );
//        }
//       } else{
//           $builder->add('tipo', EntityType::class, array(
//                    "label" => false,
//                    "placeholder" => "--Seleccione--",
//                    'query_builder' => function (EntityRepository $er) {
//                                return $er->createQueryBuilder('u')
//                                    ->orderBy('u.descripcion', 'ASC');
//                            },
//                    "class" => 'AppBundle:LugarFisico', "attr" => array(
//                        "class" => "form-control"
//                    ))
//                );
//       }
        
        
    }/**
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
        return 'lugarfisico_filter';
    }


}
