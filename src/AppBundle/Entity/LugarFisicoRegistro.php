<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LugarFisicoRegistro
 *
 * @ORM\Table(name="lugar_fisico_registro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LugarFisicoRegistroRepository")
 */
class LugarFisicoRegistro
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
     * @ORM\Column(name="lugarfisico_id", type="integer", nullable=true)
     */
    private $lugarfisicoId;


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
     * Set lugarfisicoId
     *
     * @param integer $lugarfisicoId
     *
     * @return LugarFisicoRegistro
     */
    public function setLugarfisicoId($lugarfisicoId)
    {
        $this->lugarfisicoId = $lugarfisicoId;

        return $this;
    }

    /**
     * Get lugarfisicoId
     *
     * @return int
     */
    public function getLugarfisicoId()
    {
        return $this->lugarfisicoId;
    }
}

