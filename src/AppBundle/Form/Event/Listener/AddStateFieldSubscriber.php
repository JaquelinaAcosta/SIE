<?php

namespace AppBundle\Form\Event\Listener;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use AppBundle\Form\PersonaType;
use AppBundle\Form\MesaEntradaType;
use AppBundle\Form\LugarFisicoType;

class AddStateFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SUBMIT => 'preSubmit',
        );
    }

    /**
     * Cuando el usuario llene los datos del formulario y haga el envío del mismo,
     * este método será ejecutado.
     */
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        //data es un arreglo con los valores establecidos por el usuario en el form.
        //como $data contiene el pais seleccionado por el usuario al enviar el formulario,
        // usamos el valor de la posicion $data['country'] para filtrar el sql de los estados
        $this->addField($event->getForm(),$data['ubicacion']);
    }

    protected function addField(Form $form, $ubicacion)
    {
        
        // actualizamos el campo state, pasandole el country a la opción
        // query_builder, para que el dql tome en cuenta el pais
        // y filtre la consulta por su valor.
        
        if($ubicacion == 1){
            if(!$form->has('mesaentrada')){
                 $form->add('mesaentrada', MesaEntradaType::class,['gestion'=>null,'movimiento'=>true]); 
            }          
            if($form->has('persona')){
                $form->remove('persona');
            }
            if($form->has('lugarfisico')){
                $form->remove('lugarfisico');
            }
        }
          if($ubicacion == 2){
            if(!$form->has('persona')){
                 $form->add('persona', PersonaType::class);
            }        
            if(!$form->has('mesaentrada')){
                $form->remove('mesaentrada');
            }
            if(!$form->has('lugarfisico')){
                $form->remove('lugarfisico');
            }
        }
          if($ubicacion == 3){
            if(!$form->has('lugarfisico')){
                 $form->add('lugarfisico',LugarFisicoType::class);
            }          
             if(!$form->has('mesaentrada')){
                $form->remove('mesaentrada');
            }
            if(!$form->has('persona')){
                $form->remove('persona');
            }
        }       
    }
}

