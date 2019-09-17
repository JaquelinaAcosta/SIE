<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Lexik\Bundle\FormFilterBundle\Filter\Form\Type\EmbeddedFilterTypeInterface;
use Lexik\Bundle\FormFilterBundle\Filter\Query\QueryInterface;
use Doctrine\ORM\EntityRepository;

class UsuarioFilterType extends AbstractType implements EmbeddedFilterTypeInterface {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
//        $password = $options['contrasenia'];
//        $role = $options['role'];


        $builder->add('iup', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\TextFilterType', array(
            'apply_filter' => function(QueryInterface $filterQuery, $field, $values) {
                if (!empty($values['value'])) {
                    $qb = $filterQuery->getQueryBuilder();
                    $qb->andWhere($filterQuery->getExpr()->like($field, ':iup'));
                    $qb->setParameter('iup', '%' . $values['value'] . '%');
                }
            },
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Ingrese el nombre de usuario...']
        ));

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


        $builder->add('role', 'Lexik\Bundle\FormFilterBundle\Filter\Form\Type\ChoiceFilterType', array(
            'placeholder' => '--Seleccione--',
            'attr' => [
                'class' => 'form-control'
            ],
            'choices' => array(
                'Administrador' => 'ROLE_ADMIN',
                'Usuario' => 'ROLE_USER',
                'Responsable' => 'ROLE_RESPONSABLE',
                'Supervisor'=>'ROLE_SUPERVISOR'
            )
        ));

        $builder->add('persona', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteFilterType', array(
            'class' => 'AppBundle:Persona',
            'required' => false,
            'attr' => ['class' => 'form-control',
                'placeholder' => 'Ingrese parte del nombre y seleccione...']
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
        return 'usuario_filter';
    }

}
