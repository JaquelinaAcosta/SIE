<?php

namespace AppBundle\Services;

use AppBundle\Entity\Expediente;
use AppBundle\Entity\Persona;
use AppBundle\Entity\LugarFisico;
use AppBundle\Entity\Usuario;
use AppBundle\Entity\MesaEntrada;

class Util {

    public function VerificarExpediente(Expediente $expediente = null, $usuario, $visible = null) {
        //si la dependencia del usuario  no corresponde a la dependencia
        //de la ubicacion actual del expediente, se retorna al listado.
        if ($expediente == null) {
            return false;
        }
        if ($expediente != null && $expediente->getFechaBaja() != null) {
            return false;
        }
        if ($usuario->getRole() == 'ROLE_ADMIN' or $usuario->getRole() == 'ROLE_SUPERVISOR') {
            return true;
         }else {
             foreach($expediente->getMovimientoActual()->getUbicacion()->getResponsables() as $res){
                if($res->getUsuario() == $usuario){
                    return true;
                }
            }
            
        }         
    }

    public function VerificarPersona(Persona $persona = null, $usuario) {
        //si la dependencia del usuario  no corresponde a la dependencia
        //de la ubicacion actual del expediente, se retorna al listado.
        if ($persona == null) {
            return false;
        }
        if ($persona != null && $persona->getFechaBaja() != null) {
            return false;
        }


        if ($usuario->getRole() != 'ROLE_ADMIN') {
            if ($usuario->getPersona()->getDependencia() != $persona->getDependencia()) {
                return false;
            } else {
                if ($persona == $usuario->getPersona()) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return true;
        }
    }

    public function VerificarPersonal(Persona $personal = null, $usuario) {
        //si la dependencia del usuario  no corresponde a la dependencia
        //de la ubicacion actual del expediente, se retorna al listado.
        if ($personal == null) {
            return false;
        }
        if ($personal != null && $personal->getFechaBaja() != null) {
            return false;
        }


        if ($usuario->getRole() == 'ROLE_USER') {
            if ($usuario->getPersona()->getDependencia() != $personal->getDependencia()) {
                return false;
            } else {
                if ($personal == $usuario->getPersona()) {
                    return true;
                } else {
                    return false;
                }
            }
        } else if ($usuario->getRole() == 'ROLE_RESPONSABLE') {
            if ($usuario->getPersona()->getDependencia() == $personal->getDependencia()) {
                return true;
            } else {
                return false;
            }
        } else if ($usuaro->getRole() == 'ROLE_ADMIN') {
            return true;
        }
    }

    public function VerificarUsuario(Usuario $usuario1 = null, $usuario2) {
        //si la dependencia del usuario  no corresponde a la dependencia
        //de la ubicacion actual del expediente, se retorna al listado.
        if ($usuario1 == null) {
            return false;
        }
        if ($usuario1 != null && $usuario1->getFechaBaja() != null) {
            return false;
        }



        if ($usuario2->getRole() != 'ROLE_ADMIN') {
            if ($usuario1->getPersona()->getDependencia() != $usuario2->getPersona()->getDependencia()) {
                return false;
            } else {
                if ($usuario1 == $usuario2) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return true;
        }
    }

    public function VerificarLugarFisico(LugarFisico $lugarfisico = null, $usuario, $visible = null) {
        //si la dependencia del usuario  no corresponde a la dependencia


        if ($lugarfisico == null) {
            return false;
        }//de la ubicacion actual del expediente, se retorna al listado.

        if ($lugarfisico != null && $lugarfisico->getFechaBaja() != null) {
            return false;
        }

        if ($usuario->getRole() == 'ROLE_USER') {
                    foreach ($lugarfisico->getResponsables() as $responsable) {
                        if ($usuario == $responsable->getUsuario()) {
                            return true;
                        }
                    }
        } else {
            return true;
        }
    }

    public function VerificarMesaEntrada(MesaEntrada $mesaentrada = null, $usuario) {
        //si la dependencia del usuario  no corresponde a la dependencia
        //de la ubicacion actual del expediente, se retorna al listado.
        if ($mesaentrada == null) {
            return false;
        }
        if ($mesaentrada != null && $mesaentrada->getFechaBaja() != null) {
            return false;
        }
        if ($usuario->getRole() != 'ROLE_ADMIN') {
                
             foreach($mesaentrada->getResponsables() as $res){
                if($res->getUsuario() == $usuario){
                    return true;
                }
            }

        } else {
            return true;
        }
    }

}
