<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expediente
 *
 * @ORM\Table(name="expediente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpedienteRepository")
 */
class Expediente
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
     *
     * @ORM\Column(name="nro_expediente", type="integer")
     */
    private $nroExpediente;

    /**
     * @var int
     *
     * @ORM\Column(name="tema", type="integer")
     * @ORM\OneToOne(targetEntity="Tema", mappedBy="id")
     */
    private $tema;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=255, nullable=true)
     */
    private $concepto;

    /**
     * @var int
     *
     * @ORM\Column(name="fojas", type="integer")
     */
    private $fojas;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="iniciador_dependencia", type="integer")
     * @ORM\OneToOne(targetEntity="Dependencia", mappedBy="id")
     */
    private $iniciadorDependencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="datetime")
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_actual", type="string", length=255)
     */
    private $ubicacionActual;


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
     * Set nroExpediente
     *
     * @param integer $nroExpediente
     *
     * @return Expediente
     */
    public function setNroExpediente($nroExpediente)
    {
        $this->nroExpediente = $nroExpediente;

        return $this;
    }

    /**
     * Get nroExpediente
     *
     * @return int
     */
    public function getNroExpediente()
    {
        return $this->nroExpediente;
    }

    /**
     * Set tema
     *
     * @param integer $tema
     *
     * @return Expediente
     */
    public function setTema($tema)
    {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return int
     */
    public function getTema()
    {
        return $this->tema;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     *
     * @return Expediente
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set fojas
     *
     * @param integer $fojas
     *
     * @return Expediente
     */
    public function setFojas($fojas)
    {
        $this->fojas = $fojas;

        return $this;
    }

    /**
     * Get fojas
     *
     * @return int
     */
    public function getFojas()
    {
        return $this->fojas;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Expediente
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
     * Set iniciadorDependencia
     *
     * @param integer $iniciadorDependencia
     *
     * @return Expediente
     */
    public function setIniciadorDependencia($iniciadorDependencia)
    {
        $this->iniciadorDependencia = $iniciadorDependencia;

        return $this;
    }

    /**
     * Get iniciadorDependencia
     *
     * @return int
     */
    public function getIniciadorDependencia()
    {
        return $this->iniciadorDependencia;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Expediente
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Expediente
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set ubicacionActual
     *
     * @param string $ubicacionActual
     *
     * @return Expediente
     */
    public function setUbicacionActual($ubicacionActual)
    {
        $this->ubicacionActual = $ubicacionActual;

        return $this;
    }

    /**
     * Get ubicacionActual
     *
     * @return string
     */
    public function getUbicacionActual()
    {
        return $this->ubicacionActual;
    }
}

