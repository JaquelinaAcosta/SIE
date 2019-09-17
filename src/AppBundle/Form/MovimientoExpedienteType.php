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
                ->add('fojas', TextType::class,array(
            "label"=>"Nro. de fojas:","attr"=> array(
               "class"=>"form-control" ,
               "placeholder"=>"1...2..."
            )
        ))
                ->add('observacion', TextareaType::class, array(
                   "required"=>false,
                "label"=>"Observaciones: ","attr"=> array(
               "class"=>"form-control" ,
                'rows'=> 5
            )
        ))
                ->add('comentario', TextareaType::class, array(
               "required"=>false,
               "label"=>"Comentario: ","attr"=> array(
               "class"=>"form-control" ,
               "placeholder"=>"",
                   "rows"=>5
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
           $builder->add('persona', 'PUGX\AutocompleterBundle\Form\Type\AutocompleteType', array(
                'class' => 'AppBundle:Persona',
                'label' => false,
                'attr' => array(
                    'class' => 'form form-control',
                    'placeholder' => 'Escriba parte del nombre y seleccione una opción'
                )
            ));
        }
        if($options['pase'] == 'externo'){
            if($options['dependencia_id'] != null){
                  $builder->add('mesaentrada', MesaEntradaType::class, [
                      'gestion' => 'externo', 'movimiento' => true,
                      'dependencia_id'=>$options['dependencia_id'],
                      'quitar_guardar'=>true]);
            }else{
                  $builder->add('mesaentrada', MesaEntradaType::class, ['gestion' => null, 'movimiento' => true]);
            }
          
        }
        if($options['pase'] == 'interno-externo'){
                  $builder->add('mesaentrada', MesaEntradaType::class, [
                      'gestion' => null, 'movimiento' => true,
                      'dependencia_id'=>$options['dependencia_id'],
                      'quitar_guardar'=>true]);        
        }
        if($options['pase'] == 'archivar'){
            $builder->add('lugarfisico', LugarFisicoType::class, [
                'edit_mode' => null, 
                'movimiento_lugar' => true,
                'dependencia_id'=>$options['dependencia_id']
                ]);
        }
        
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MovimientoExpediente',
            'pase'=>null,
            'dependencia_id'=>null
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
