<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MesaEntrada
 *
 * @ORM\Table(name="mesa_entrada")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MesaEntradaRepository")
 */
class MesaEntrada extends Ubicacion {

    /**
     * @var string
     *
     * @ORM\Column(name="codigoExpediente", type="string",length=255)
     */
    private $codigoExpediente;


    public function __toString() {
//        return "Mesa de Entrada - ".parent::getDependencia()->getDescripcion();
        return "Mesa de Entrada - ".parent::getDependencia()->getDescripcion();
    }
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codigoExpediente
     *
     * @param integer $codigoExpediente
     *
     * @return MesaEntrada
     */
    public function setCodigoExpediente($codigoExpediente) {
        $this->codigoExpediente = $codigoExpediente;

        return $this;
    }

    /**
     * Get codigoExpediente
     *
     * @return int
     */
    public function getCodigoExpediente() {
        return $this->codigoExpediente;
    }

    /**
     * Set idUbicacion
     *
     * @param integer $idUbicacion
     *
     * @return MesaEntrada
     */
    public function setIdUbicacion($idUbicacion) {
        $this->idUbicacion = $idUbicacion;

        return $this;
    }

    /**
     * Get idUbicacion
     *
     * @return integer
     */
    public function getIdUbicacion() {
        return $this->idUbicacion;
    }
    
}
