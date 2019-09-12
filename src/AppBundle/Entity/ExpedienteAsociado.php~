<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
USE Symfony\Component\Validator\Constraints as Assert;

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
     * @var datetime
     *
     * @ORM\Column(name="fecha", type="datetime",length=255)
     */
    private $fecha;

    /**
     * @var int
     *
     * @ORM\Column(name="orden_asociacion", type="integer")
     */
    private $ordenAsociacion;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */
    protected $fechaBaja;

    /**
     * @var datetime
     *
     * @ORM\Column(name="fecha_alta", type="datetime",nullable=true)
     *
     */
    private $fechaAlta;

    /**
     * @var datetime
     *
     * @ORM\Column(name="fecha_ultima_modificacion", type="datetime",nullable=true)
     *
     */
    private $fechaUltimaModificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ultima_modificacion", type="string",length=255,nullable=true)
     *
     */
    private $usuarioUltimaModificacion;


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

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return ExpedienteAsociado
     */
    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    /**
     * Set fechaUltimaModificacion
     *
     * @param \DateTime $fechaUltimaModificacion
     *
     * @return ExpedienteAsociado
     */
    public function setFechaUltimaModificacion($fechaUltimaModificacion) {
        $this->fechaUltimaModificacion = $fechaUltimaModificacion;

        return $this;
    }

    /**
     * Get fechaUltimaModificacion
     *
     * @return \DateTime
     */
    public function getFechaUltimaModificacion() {
        return $this->fechaUltimaModificacion;
    }

    /**
     * Set usuarioUltimaModificacion
     *
     * @param string $usuarioUltimaModificacion
     *
     * @return ExpedienteAsociado
     */
    public function setUsuarioUltimaModificacion($usuarioUltimaModificacion) {
        $this->usuarioUltimaModificacion = $usuarioUltimaModificacion;

        return $this;
    }

    /**
     * Get usuarioUltimaModificacion
     *
     * @return string
     */
    public function getUsuarioUltimaModificacion() {
        return $this->usuarioUltimaModificacion;
    }


    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     *
     * @return ExpedienteAsociado
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
}
