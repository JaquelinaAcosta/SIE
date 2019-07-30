<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Tema
 *
 * @ORM\Table(name="tema")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TemaRepository")
 */
class Tema
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="CaratulaAgregada", mappedBy="tema")
     * @ORM\OneToMany(targetEntity="Expediente", mappedBy="tema")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255)
     */
    private $codigo;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    
   /**
    * @ORM\OneToMany(targetEntity="Expediente",mappedBy="tema")
    */
    private $expedientes;
    
    public function __construct() {
        $this->expedientes = new ArrayCollection();
    }
    
    public function __toString() {
        return $this->codigo." - ".$this->descripcion;
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tema
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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Tema
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Add expediente
     *
     * @param \AppBundle\Entity\Expediente $expediente
     *
     * @return Tema
     */
    public function addExpediente(\AppBundle\Entity\Expediente $expediente)
    {
        $this->expedientes[] = $expediente;

        return $this;
    }

    /**
     * Remove expediente
     *
     * @param \AppBundle\Entity\Expediente $expediente
     */
    public function removeExpediente(\AppBundle\Entity\Expediente $expediente)
    {
        $this->expedientes->removeElement($expediente);
    }

    /**
     * Get expedientes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExpedientes()
    {
        return $this->expedientes;
    }
}
