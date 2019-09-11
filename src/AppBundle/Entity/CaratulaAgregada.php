<?php

namespace AppBundle\Entity;

USE Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Expediente;

/**
 * CaratulaAgregada
 *
 * @ORM\Table(name="caratula_agregada")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CaratulaAgregadaRepository")
 */
class CaratulaAgregada {

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
     * @ORM\ManyToOne(targetEntity="Expediente", inversedBy="caratulas")
     * @ORM\JoinColumn(name="expediente", referencedColumnName="id", nullable=false)
     */
    private $expediente;

    /**
     * @var int
     * @ORM\OneToOne(targetEntity="Tema")
     * @ORM\JoinColumn(name="tema", referencedColumnName="id", nullable=false)
     */
    private $tema;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="text", length=21845)
     */
    private $concepto;

    /**
     * @var int
     *
     * @ORM\Column(name="fojas", type="integer")
     */
    private $fojas;

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
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return CaratulaAgregada
     */
    public function setExpediente($expediente) {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return int
     */
    public function getExpediente() {
        return $this->expediente;
    }

    /**
     * Set tema
     *
     * @param integer $tema
     *
     * @return CaratulaAgregada
     */
    public function setTema($tema) {
        $this->tema = $tema;

        return $this;
    }

    /**
     * Get tema
     *
     * @return int
     */
    public function getTema() {
        return $this->tema;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     *
     * @return CaratulaAgregada
     */
    public function setConcepto($concepto) {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string
     */
    public function getConcepto() {
        return $this->concepto;
    }

    /**
     * Set fojas
     *
     * @param integer $fojas
     *
     * @return CaratulaAgregada
     */
    public function setFojas($fojas) {
        $this->fojas = $fojas;

        return $this;
    }

    /**
     * Get fojas
     *
     * @return int
     */
    public function getFojas() {
        return $this->fojas;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return CaratulaAgregada
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
     * @return CaratulaAgregada
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
     * @return CaratulaAgregada
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
     * @return CaratulaAgregada
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
     * @Assert\IsTrue(message="La cantidad de fojas debe ser un número entero mayor a 0")
     */
    public function getValidarFojas() {
        if (($this->fojas) > 0) {
            return true;
        }
        return false;
    }
}
