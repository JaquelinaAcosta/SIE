<?php

namespace AppBundle\Form\Event\Listener;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use AppBundle\Form\PersonaType;
use AppBundle\Form\MesaEntradaType;
use AppBundle\Form\LugarFisicoType;

class AddStateFieldSubscriber implements EventSubscriberInterface {

    protected $dependencia_id;
    
    public function setDependenciaId($id) {
        $this->dependencia_id = $id;
    }
    
    public static function getSubscribedEvents() {
        return array(
            FormEvents::PRE_SUBMIT => 'preSubmit',
        );
    }
    
    
    /**
     * Cuando el usuario llene los datos del formulario y haga el envío del mismo,
     * este método será ejecutado.
     */
    public function preSubmit(FormEvent $event) {
        $data = $event->getData();

        //data es un arreglo con los valores establecidos por el usuario en el form.
        //como $data contiene el pais seleccionado por el usuario al enviar el formulario,
        // usamos el valor de la posicion $data['country'] para filtrar el sql de los estados
        $this->addField($event->getForm(), $data['ubicacion']);

    }

    protected function addField(Form $form, $ubicacion) {
        
        if ($ubicacion == 0) {
            $form->remove('mesaentrada');
            $form->remove('persona');
            $form->remove('lugarfisico');
        }

        if ($ubicacion == 1) {
            if ($form->has('mesaentrada') == false) {
                $form->add('mesaentrada', MesaEntradaType::class, ['gestion' => null, 'movimiento' => true,'dependencia_id'=> $this->dependencia_id]);
            }
        }
        if ($ubicacion == 2) {
            if ($form->has('persona') == false) {
                $form->add('persona', PersonaType::class, ['role' => null, 'movimiento_persona' => true]);
            }
        }
        if ($ubicacion == 3) {

            if ($form->has('lugarfisico') == false) {
                $form->add('lugarfisico', LugarFisicoType::class, ['edit_mode' => null, 'movimiento_lugar' => true]);
            }
        }
    }

}
