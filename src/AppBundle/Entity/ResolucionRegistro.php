<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResolucionRegistro
 *
 * @ORM\Table(name="resolucion_registro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResolucionRegistroRepository")
 */
class ResolucionRegistro
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
     * @ORM\Column(name="expediente_id", type="integer")
     */
    private $expedienteId;

    /**
     * @var int
     *
     * @ORM\Column(name="resolucion_id", type="integer")
     */
    private $resolucionId;


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
     * @return ResolucionRegistro
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
     * Set resolucionId
     *
     * @param integer $resolucionId
     *
     * @return ResolucionRegistro
     */
    public function setResolucionId($resolucionId)
    {
        $this->resolucionId = $resolucionId;

        return $this;
    }

    /**
     * Get resolucionId
     *
     * @return int
     */
    public function getResolucionId()
    {
        return $this->resolucionId;
    }
}

