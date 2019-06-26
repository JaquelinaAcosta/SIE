<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ubicacion
 *
 * @ORM\Table(name="ubicacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UbicacionRepository")
 */
class Ubicacion
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
     * @ORM\Column(name="dependencia", type="integer")
     * @ORM\ManyToOne(targetEntity="Dependencia", mappedBy="id")
     */
    private $dependencia;


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
     * Set dependencia
     *
     * @param integer $dependencia
     *
     * @return Ubicacion
     */
    public function setDependencia($dependencia)
    {
        $this->dependencia = $dependencia;

        return $this;
    }

    /**
     * Get dependencia
     *
     * @return int
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }
}

