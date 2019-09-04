<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Expediente;

/**
 * Resolucion
 *
 * @ORM\Table(name="resolucion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResolucionRepository")
 */
class Resolucion
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\OneToOne(targetEntity="Expediente",inversedBy="resolucion")
     * @ORM\JoinColumn(name="expediente", referencedColumnName="id", nullable=false)
     */
    private $expediente;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_resolucion", type="integer")
     */
    private $numeroResolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", length=21845)
     */
    private $observacion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="fecha_resolucion", type="string",length=255)
     */
    private $fechaResolucion;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Usuario",inversedBy="resolucion",cascade={"persist"})
     * @ORM\JoinColumn(name="usuario", referencedColumnName="id", nullable=false)
     */
    private $usuario;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return Resolucion
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return int
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set numeroResolucion
     *
     * @param integer $numeroResolucion
     *
     * @return Resolucion
     */
    public function setNumeroResolucion($numeroResolucion)
    {
        $this->numeroResolucion = $numeroResolucion;

        return $this;
    }

    /**
     * Get numeroResolucion
     *
     * @return int
     */
    public function getNumeroResolucion()
    {
        return $this->numeroResolucion;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Resolucion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     *
     * @return Resolucion
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     *
     * @return Resolucion
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     *
     * @return Resolucion
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set fechaFinalizacion
     *
     * @param \DateTime $fechaFinalizacion
     *
     * @return Resolucion
     */
    public function setFechaFinalizacion($fechaFinalizacion)
    {
        $this->fechaFinalizacion = $fechaFinalizacion;

        return $this;
    }

    /**
     * Get fechaFinalizacion
     *
     * @return \DateTime
     */
    public function getFechaFinalizacion()
    {
        return $this->fechaFinalizacion;
    }

    /**
     * Set fechaResolucion
     *
     * @param \DateTime $fechaResolucion
     *
     * @return Resolucion
     */
    public function setFechaResolucion($fechaResolucion)
    {
        $this->fechaResolucion = $fechaResolucion;

        return $this;
    }

    /**
     * Get fechaResolucion
     *
     * @return \DateTime
     */
    public function getFechaResolucion()
    {
        return $this->fechaResolucion;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Resolucion
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Resolucion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }
}
