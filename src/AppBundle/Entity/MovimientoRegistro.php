<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MovimientoRegistro
 *
 * @ORM\Table(name="movimiento_registro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MovimientoRegistroRepository")
 */
class MovimientoRegistro
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
     * @ORM\Column(name="expediente_id", type="integer", nullable=true)
     */
    private $expedienteId;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion_desde", type="string", length=255)
     */
    private $ubicacionDesde;

    /**
     * @var int
     *
     * @ORM\Column(name="ubicacion_hacia", type="integer")
     */
    private $ubicacionHacia;


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
     * Set expedienteId
     *
     * @param integer $expedienteId
     *
     * @return MovimientoRegistro
     */
    public function setExpedienteId($expedienteId)
    {
        $this->expedienteId = $expedienteId;

        return $this;
    }

    /**
     * Get expedienteId
     *
     * @return int
     */
    public function getExpedienteId()
    {
        return $this->expedienteId;
    }

    /**
     * Set ubicacionDesde
     *
     * @param string $ubicacionDesde
     *
     * @return MovimientoRegistro
     */
    public function setUbicacionDesde($ubicacionDesde)
    {
        $this->ubicacionDesde = $ubicacionDesde;

        return $this;
    }

    /**
     * Get ubicacionDesde
     *
     * @return string
     */
    public function getUbicacionDesde()
    {
        return $this->ubicacionDesde;
    }

    /**
     * Set ubicacionHacia
     *
     * @param integer $ubicacionHacia
     *
     * @return MovimientoRegistro
     */
    public function setUbicacionHacia($ubicacionHacia)
    {
        $this->ubicacionHacia = $ubicacionHacia;

        return $this;
    }

    /**
     * Get ubicacionHacia
     *
     * @return int
     */
    public function getUbicacionHacia()
    {
        return $this->ubicacionHacia;
    }
}

