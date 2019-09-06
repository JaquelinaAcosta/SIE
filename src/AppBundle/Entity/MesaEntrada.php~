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
    
        /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string",length=255)
     */
    private $telefono;
    

    public function __toString() {
//        return "Mesa de Entrada - ".parent::getDependencia()->getDescripcion();
        return "Mesa de Entrada";
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
    

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     *
     * @return MesaEntrada
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return MesaEntrada
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
}
