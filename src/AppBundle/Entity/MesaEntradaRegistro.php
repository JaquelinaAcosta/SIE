<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MesaEntradaRegistro
 *
 * @ORM\Table(name="mesa_entrada_registro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MesaEntradaRegistroRepository")
 */
class MesaEntradaRegistro
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
     * @ORM\Column(name="mesaentrada_id", type="integer")
     */
    private $mesaentradaId;


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
     * Set mesaentradaId
     *
     * @param integer $mesaentradaId
     *
     * @return MesaEntradaRegistro
     */
    public function setMesaentradaId($mesaentradaId)
    {
        $this->mesaentradaId = $mesaentradaId;

        return $this;
    }

    /**
     * Get mesaentradaId
     *
     * @return int
     */
    public function getMesaentradaId()
    {
        return $this->mesaentradaId;
    }
}
