<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use AppBundle\Form\Event\Listener\AddStateFieldSubscriber;

class ResponsableType extends AbstractType {

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $id = $options['dependencia_id'];

        $builder
                ->add('usuario', EntityType::class, [
                    'class' => 'AppBundle:Usuario',
                    'query_builder' => function(EntityRepository $er ) use ($id) {
                        return $er->createQueryBuilder('u')
                                ->leftJoin(\AppBundle\Entity\Persona::class, "p", "WITH", "p.id= u.persona")
                                ->leftJoin(\AppBundle\Entity\Ubicacion::class, "ub", "WITH", "ub.id = p.id")
                                ->where('ub.dependencia = :id')
                                ->andWhere("u.role != 'ROLE_ADMIN'")
                                ->setParameter('id', $id);
                    },
                    'label' => false,
                    'placeholder' => '--Seleccione--',
                    'attr' => [
                        'class' => 'user form-control respon',
                        'disabled'=>false
                    ]
        ]);
//         $builder->addEventSubscriber(new AddStateFieldSubscriber());
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Responsable',
            'dependencia_id' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix() {
        return 'responsable';
    }

}
