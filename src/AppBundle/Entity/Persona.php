<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Persona
 *
 * @ORM\Table(name="persona")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonaRepository")
 */
class Persona extends Ubicacion
{

     /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="dni", type="string", length=255)
     */
    private $dni;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=255)
     */
    private $cargo;
    
     /**
     * @ORM\OneToOne(targetEntity="Usuario",mappedBy="persona")
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
     * Set idUbicacion
     *
     * @param integer $idUbicacion
     *
     * @return Persona
     */
    public function setIdUbicacion($idUbicacion)
    {
        $this->idUbicacion = $idUbicacion;

        return $this;
    }
    
    
     /**
     * Get idUbicacion
     *
     * @return integer
     */
    public function getIdUbicacion()
    {
        return $this->idUbicacion;
    }

    
    
    
    
    
    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Persona
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Persona
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Persona
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     *
     * @return Persona
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Persona
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}
