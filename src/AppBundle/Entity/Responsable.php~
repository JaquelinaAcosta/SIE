<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
USE Symfony\Component\Validator\Constraints as Assert;
/**
 * Responsable
 *
 * @ORM\Table(name="responsable")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResponsableRepository")
 */
class Responsable {

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
     * @ORM\ManyToOne(targetEntity="Ubicacion",inversedBy="responsables")
     * @ORM\JoinColumn(name="ubicacion", referencedColumnName="id", nullable=false)
     */
    private $ubicacion;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Usuario",inversedBy="responsables")
     * @ORM\JoinColumn(name="usuario", referencedColumnName="id", nullable=false)
     */
    private $usuario;

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
     * Set ubicacion
     *
     * @param integer $ubicacion
     *
     * @return Responsable
     */
    public function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return int
     */
    public function getUbicacion() {
        return $this->ubicacion;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Responsable
     */
    public function setUsuario($usuario) {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario() {
        return $this->usuario;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Responsable
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
     * @return Responsable
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
     * @return Responsable
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
     * @return Responsable
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
