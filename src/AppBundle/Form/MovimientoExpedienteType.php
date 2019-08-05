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
        
<<<<<<< HEAD
        $builder             
=======
        $builder
                ->add('ubicacion', ChoiceType::class, array(
                    'required'=>true,
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
>>>>>>> abf331d7d4d966baf9877772d22a31de37a9380b
                ->add('fojas', TextType::class,array(
            "label"=>"Nro. de fojas:","attr"=> array(
               "class"=>"form-name form-control" ,
               "placeholder"=>"1...2..."
            )
        ))
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
                ->add('Aceptar', SubmitType::class,array("attr"=> array(
            "class"=>"form-submit btn btn-primary" 
            )
        ));
//        $eventSuscriber = new AddStateFieldSubscriber();
//        $eventSuscriber->setDependenciaId(6);
//                $builder->addEventSubscriber($eventSuscriber);
        
        if($options['pase'] == 'interno'){
            $builder->add('persona', PersonaType::class, ['role' => null, 'movimiento_persona' => true]);
        }
        if($options['pase'] == 'externo'){
<<<<<<< HEAD
            if($options['dependencia_id'] != null){
                  $builder->add('mesaentrada', MesaEntradaType::class, [
                      'gestion' => null, 'movimiento' => true,
                      'dependencia_id'=>$options['dependencia_id']]);
            }else{
                  $builder->add('mesaentrada', MesaEntradaType::class, ['gestion' => null, 'movimiento' => true]);
            }
          
        }
        if($options['pase'] == 'archivar'){
            $builder->add('lugarfisico', LugarFisicoType::class, ['edit_mode' => null, 'movimiento_lugar' => true]);
=======
            $form->add('mesaentrada', MesaEntradaType::class, ['gestion' => null, 'movimiento' => true,'dependencia_id'=> $this->dependencia_id]);
        }
        if($options['pase'] == 'archivar'){
            $form->add('lugarfisico', LugarFisicoType::class, ['edit_mode' => null, 'movimiento_lugar' => true]);
>>>>>>> abf331d7d4d966baf9877772d22a31de37a9380b
        }
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MovimientoExpediente',
<<<<<<< HEAD
            'pase'=>null,
            'dependencia_id'=>null
=======
            'pase'=>null
>>>>>>> abf331d7d4d966baf9877772d22a31de37a9380b
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
