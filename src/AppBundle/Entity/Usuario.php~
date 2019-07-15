<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario
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
     * @ORM\Column(name="iup", type="string", length=255)
     */
    private $iup;
    
    /**
     * @var string
     *
     * @ORM\Column(name="contrasenia", type="string", length=20)
     */
    private $contrasenia;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="string", length=255)
     */
    private $roles;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Persona",inversedBy="usuario")
     * @ORM\JoinColumn(name="persona", referencedColumnName="id", nullable=false)
     */
    private $persona;

    
    /**
    * @ORM\OneToMany(targetEntity="Responsable",mappedBy="usuario")
    */
    private $responsable;
    
    
    /**
    * @ORM\OneToMany(targetEntity="Resolucion",mappedBy="responsable")
    */
    private $resolucion;
    
    
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
     * Set iup
     *
     * @param string $iup
     *
     * @return Usuario
     */
    public function setIup($iup)
    {
        $this->iup = $iup;

        return $this;
    }

    /**
     * Get iup
     *
     * @return string
     */
    public function getIup()
    {
        return $this->iup;
    }
    
    
    /**
     * Get contrasenia
     *
     * @return string
     */
    public function getContrasenia()
    {
        return $this->contrasenia;
    }
    
    /**
     * Set contrasenia
     *
     * @param string $contrasenia
     *
     * @return Usuario
     */
    public function setContrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    /**
     * Set roles
     *
     * @param string $roles
     *
     * @return Usuario
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set persona
     *
     * @param integer $persona
     *
     * @return Usuario
     */
    public function setPersona($persona)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return int
     */
    public function getPersona()
    {
        return $this->persona;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->responsable = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add responsable
     *
     * @param \AppBundle\Entity\Responsable $responsable
     *
     * @return Usuario
     */
    public function addResponsable(\AppBundle\Entity\Responsable $responsable)
    {
        $this->responsable[] = $responsable;

        return $this;
    }

    /**
     * Remove responsable
     *
     * @param \AppBundle\Entity\Responsable $responsable
     */
    public function removeResponsable(\AppBundle\Entity\Responsable $responsable)
    {
        $this->responsable->removeElement($responsable);
    }

    /**
     * Get responsable
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Add resolucion
     *
     * @param \AppBundle\Entity\Resolucion $resolucion
     *
     * @return Usuario
     */
    public function addResolucion(\AppBundle\Entity\Resolucion $resolucion)
    {
        $this->resolucion[] = $resolucion;

        return $this;
    }

    /**
     * Remove resolucion
     *
     * @param \AppBundle\Entity\Resolucion $resolucion
     */
    public function removeResolucion(\AppBundle\Entity\Resolucion $resolucion)
    {
        $this->resolucion->removeElement($resolucion);
    }

    /**
     * Get resolucion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResolucion()
    {
        return $this->resolucion;
    }
}
