<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpedienteAsociado
 *
 * @ORM\Table(name="expediente_asociado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpedienteAsociadoRepository")
 */
class ExpedienteAsociado {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Expediente",inversedBy="expedientes_asociados",cascade={"persist"}))
     * @ORM\JoinColumn(name="expediente_padre_id", referencedColumnName="id", nullable=false)
     */
    private $expedientePadre;

    /**
     * @ORM\OneToOne(targetEntity="Expediente")
     */
    private $expedienteAsociado;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha", type="string",length=255)
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="orden_asociacion", type="integer")
     */
    private $ordenAsociacion;
    
    public function __toString() {
        return $this->expedientePadre->getNroExpediente();
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
     * Set expedientePadre
     *
     * @param integer $expedientePadre
     *
     * @return ExpedienteAsociado
     */
    public function setExpedientePadre($expedientePadre) {
        $this->expedientePadre = $expedientePadre;

        return $this;
    }

    /**
     * Get expedientePadre
     *
     * @return int
     */
    public function getExpedientePadre() {
        return $this->expedientePadre;
    }

    /**
     * Set expedienteAsociado
     *
     * @param integer $expedienteAsociado
     *
     * @return ExpedienteAsociado
     */
    public function setExpedienteAsociado($expedienteAsociado) {
        $this->expedienteAsociado = $expedienteAsociado;

        return $this;
    }

    /**
     * Get expedienteAsociado
     *
     * @return int
     */
    public function getExpedienteAsociado() {
        return $this->expedienteAsociado;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return ExpedienteAsociado
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha() {
        return $this->fecha;
    }

    /**
     * Set ordenAsociacion
     *
     * @param integer $ordenAsociacion
     *
     * @return ExpedienteAsociado
     */
    public function setOrdenAsociacion($ordenAsociacion) {
        $this->ordenAsociacion = $ordenAsociacion;

        return $this;
    }

    /**
     * Get ordenAsociacion
     *
     * @return int
     */
    public function getOrdenAsociacion() {
        return $this->ordenAsociacion;
    }

}
