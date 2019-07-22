<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Expediente;
use AppBundle\Entity\Ubicacion;

use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Column(name="dependenciaPadre", type="string")
     */
    private $dependenciaPadre;

    /**
     * @var int
     *
     * @ORM\Column(name="responsable", type="string")
     */
    private $responsable;

    /**
     * @var int
     *
     * @ORM\Column(name="nivel", type="string")
     */
    private $nivel;

    /**
    * @ORM\OneToMany(targetEntity="Expediente",mappedBy="iniciadorDependencia")
    */
    private $expedientes;

    /**
    * @ORM\OneToMany(targetEntity="Ubicacion",mappedBy="dependencia")
    */
    private $ubicaciones;
    
    
    /**
     * @Assert\Type(type="App\Entity\MesaEntrada")
     * @Assert\Valid
     */
    protected $mesaentrada;
    
     /**
     * @Assert\Type(type="App\Entity\Persona")
     * @Assert\Valid
     */
    protected $persona;
    

    // ...

    public function getMesaentrada()
    {
        return $this->mesaentrada;
    }

    public function setMesaentrada(MesaEntrada $mesaentrada = null)
    {
        $this->mesaentrada = $mesaentrada;
    }
    
    public function getPersona()
    {
        return $this->persona;
    }

    public function setPersona(MesaEntrada $persona = null)
    {
        $this->persona = $persona;
    }

    public function __construct(){
        $this->expedientes = new ArrayCollection();
        $this->ubicaciones = new ArrayCollection();
    }

    public function __toString() {
        return $this->descripcion;
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

    /**
     * Add expediente
     *
     * @param \AppBundle\Entity\Expediente $expediente
     *
     * @return Dependencia
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

    /**
     * Add ubicacione
     *
     * @param \AppBundle\Entity\Ubicacion $ubicacione
     *
     * @return Dependencia
     */
    public function addUbicacione(\AppBundle\Entity\Ubicacion $ubicacione)
    {
        $this->ubicaciones[] = $ubicacione;

        return $this;
    }

    /**
     * Remove ubicacione
     *
     * @param \AppBundle\Entity\Ubicacion $ubicacione
     */
    public function removeUbicacione(\AppBundle\Entity\Ubicacion $ubicacione)
    {
        $this->ubicaciones->removeElement($ubicacione);
    }

    /**
     * Get ubicaciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUbicaciones()
    {
        return $this->ubicaciones;
    }
}
