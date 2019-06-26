<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dependencia
 *
 * @ORM\Table(name="dependencia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DependenciaRepository")
 */
class Dependencia
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="dependencia_padre", type="integer")
     */
    private $dependenciaPadre;

    /**
     * @var int
     *
     * @ORM\Column(name="responsable", type="integer")
     */
    private $responsable;

    /**
     * @var int
     *
     * @ORM\Column(name="nivel", type="integer")
     */
    private $nivel;


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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Dependencia
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
     * Set dependenciaPadre
     *
     * @param integer $dependenciaPadre
     *
     * @return Dependencia
     */
    public function setDependenciaPadre($dependenciaPadre)
    {
        $this->dependenciaPadre = $dependenciaPadre;

        return $this;
    }

    /**
     * Get dependenciaPadre
     *
     * @return int
     */
    public function getDependenciaPadre()
    {
        return $this->dependenciaPadre;
    }

    /**
     * Set responsable
     *
     * @param integer $responsable
     *
     * @return Dependencia
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return int
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     *
     * @return Dependencia
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return int
     */
    public function getNivel()
    {
        return $this->nivel;
    }
}

