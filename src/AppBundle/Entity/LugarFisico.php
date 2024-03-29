<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LugarFisico
 *
 * @ORM\Table(name="lugar_fisico")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LugarFisicoRepository")
 */
class LugarFisico extends Ubicacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string",length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=21845)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="acceso", type="string", length=255)
     */
    private $acceso;

    
    public function __toString() {
        return $this->tipo;
    }
    

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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return LugarFisico
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return LugarFisico
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set acceso
     *
     * @param string $acceso
     *
     * @return LugarFisico
     */
    public function setAcceso($acceso)
    {
        $this->acceso = $acceso;

        return $this;
    }

    /**
     * Get acceso
     *
     * @return string
     */
    public function getAcceso()
    {
        return $this->acceso;
    }

    /**
     * Set idUbicacion
     *
     * @param integer $idUbicacion
     *
     * @return LugarFisico
     */
    public function setIdUbicacion($idUbicacion)
    {
        $this->idUbicacion = $idUbicacion;

        return $this;
    }

    /**
     * Get idUbicacion
     *
     * @return integer
     */
    public function getIdUbicacion()
    {
        return $this->idUbicacion;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     *
     * @return LugarFisico
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
