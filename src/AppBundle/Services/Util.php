<?php

namespace AppBundle\Services;

use AppBundle\Entity\Expediente;
use AppBundle\Entity\Persona;
use AppBundle\Entity\LugarFisico;
use AppBundle\Entity\Usuario;

class Util {

    public function VerificarExpediente(Expediente $expediente=null, $usuario, $visible = null) {
        //si la dependencia del usuario  no corresponde a la dependencia
        //de la ubicacion actual del expediente, se retorna al listado.
        if ($expediente == null) {
            return false;
        }

        if ($usuario->getRole() != 'ROLE_ADMIN') {
            if ($usuario->getPersona()->getDependencia() != $expediente->getUbicacionActual()->getDependencia()) {
                return false;
            } else {
                if ($visible == null) {
                    //Sinó, verifico que el usuario sea responsable de la ubicacion actual.
                    foreach ($expediente->getUbicacionActual()->getResponsables() as $responsable) {
                        if ($usuario == $responsable->getUsuario()) {
                            return true;
                        }
                    }
                } else {
                    return true;
                }
            }
        } else {
            return true;
        }
    }

    public function VerificarPersona(Persona $persona=null, $usuario) {
        //si la dependencia del usuario  no corresponde a la dependencia
        //de la ubicacion actual del expediente, se retorna al listado.
        if ($persona == null) {
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

    public function VerificarUsuario(Usuario $usuario1=null, $usuario2) {
        //si la dependencia del usuario  no corresponde a la dependencia
        //de la ubicacion actual del expediente, se retorna al listado.
        if ($usuario1 == null) {
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

    public function VerificarLugarFisico(LugarFisico $lugarfisico=null, $usuario, $visible = null) {
        //si la dependencia del usuario  no corresponde a la dependencia


        if ($lugarfisico == null) {
            return false;
        }//de la ubicacion actual del expediente, se retorna al listado.
        if ($usuario->getRole() != 'ROLE_ADMIN') {
            if ($usuario->getPersona()->getDependencia() != $lugarfisico->getDependencia()) {
                return false;
            } else {
                if ($visible == null) {
                    //Sinó, verifico que el usuario sea responsable de la ubicacion actual.
                    foreach ($lugarfisico->getResponsables() as $responsable) {
                        if ($usuario == $responsable->getUsuario()) {
                            return true;
                        }
                    }
                } else {
                    return true;
                }
            }
        } else {
            return true;
        }
    }

}
