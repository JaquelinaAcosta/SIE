<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use AppBundle\Form\Event\Listener\AddStateFieldSubscriber;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MovimientoExpedienteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//                ->add('expediente', TextType::class,array(
//            "label"=>"Nro. de Expediente: ","attr"=> array(
//               "class"=>"form-name form-control" ,
//               "placeholder"=>"00000-000000000-0"
//            )
//        ))
                ->add('ubicacion', ChoiceType::class, array(
                    "choices" => array(
                        "--Seleccione--" => 0,
                        "Mesa de Entrada" => 1,
                        "Persona" => 2,
                        "Lugar Físico" => 3
                    ),
                    "label" => false, "attr" => array(
                        "class" => "form-name form-control"
                    )
        ))
//                ->add('fojas', TextType::class,array(
//            "label"=>"Nro. de fojas:","attr"=> array(
//               "class"=>"form-name form-control" ,
//               "placeholder"=>"1...2..."
//            )
//        ))
//                ->add('usuario', TextType::class,array(
//            "label"=>"Usuario: ","attr"=> array(
//               "class"=>"form-name form-control" 
//            )
//        ))
//                ->add('fecha', TextType::class, array(
//                    "label" => false, "attr" => array(
//                        "class" => 'datepicker form-control',
//                        "placeholder" => 'MM-DD-AAAA'
//                    )
//                ))
                ->add('observacion', TextareaType::class, array(
                "label"=>"Observaciones: ","attr"=> array(
               "class"=>"form-name form-control" ,
                'rows'=> 4
            )
        ))
                ->add('comentario', TextareaType::class, array(
               "label"=>"Comentario: ","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"Comentario..."
            )
        ))
           
//                ->add('tipoSalida', TextType::class, array(
//            "label"=>"Tipo de Salida: ","attr"=> array(
//               "class"=>"form-name form-control" 
//            )
//        ))
                ->add('Aceptar', SubmitType::class,array("attr"=> array(
            "class"=>"form-submit btn btn-primary" 
            )
        ));
                $builder->addEventSubscriber(new AddStateFieldSubscriber());
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MovimientoExpediente'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'movimientoexpediente';
    }


}
