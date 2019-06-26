<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MesaEntrada
 *
 * @ORM\Table(name="mesa_entrada")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MesaEntradaRepository")
 */
class MesaEntrada extends Ubicacion
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
     * @ORM\Column(name="id_ubicacion", type="integer")
     * @ORM\ManyToOne(targetEntity="Ubicacion", mappedBy="id")
     * @ORM\Id
     */
    private $idUbicacion;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_expediente", type="integer")
     */
    private $codigoExpediente;


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
     * Set codigoExpediente
     *
     * @param integer $codigoExpediente
     *
     * @return MesaEntrada
     */
    public function setCodigoExpediente($codigoExpediente)
    {
        $this->codigoExpediente = $codigoExpediente;

        return $this;
    }

    /**
     * Get codigoExpediente
     *
     * @return int
     */
    public function getCodigoExpediente()
    {
        return $this->codigoExpediente;
    }
}

