<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsable
 *
 * @ORM\Table(name="responsable")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ResponsableRepository")
 */
class Responsable
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ubicacion
     *
     * @param integer $ubicacion
     *
     * @return Responsable
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return int
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Responsable
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
