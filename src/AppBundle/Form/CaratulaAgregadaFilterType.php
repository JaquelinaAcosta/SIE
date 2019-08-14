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
        $builder->add('concepto', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':concepto'));
                    $qb->setParameter('concepto', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Búsqueda por concepto...']
        ));
            
//            SELECT * FROM `caratula_agregada` LEFT JOIN tema ON caratula_agregada.tema = tema.id WHERE tema.id = 69
           
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

        $builder->add('filter', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Filtrar',
            'attr' => ['class' => 'btn btn-primary']
        ));

        $builder->add('reset', 'Symfony\Component\Form\Extension\Core\Type\SubmitType', array(
            'label' => 'Reiniciar',
            'attr' => ['class' => 'btn btn-secondary']
        ));



//        $builder
//                
//                 ->add('tema', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteType', array(
//                    'class' => 'AppBundle:Tema',
//                    'label' => 'Responsable',
//                    'required' => false,
//                    'attr' => array(
//                        'class'=>'form form-control',
//                        'placeholder' => 'Escriba parte del código y seleccione un tema'
//                    )
//                ))
//                ->add('concepto', TextareaType::class,array(
//            "label"=>"Concepto:","attr"=> array(
//               "class"=>"form-name form-control" ,
//               "placeholder"=>"Concepto..."
//            )
//        ))
//                ->add('fojas', TextType::class,array(
//            "label"=>"Cantidad de Fojas:","attr"=> array(
//               "class"=>"form-name form-control" ,
//               "placeholder"=>"1, 2, 3.."
//            )
//        ))
//                ->add('Aceptar', SubmitType::class,array("attr"=> array(
//               "class"=>"form-submit btn btn-primary" 
//            )
//        ));
//                
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
