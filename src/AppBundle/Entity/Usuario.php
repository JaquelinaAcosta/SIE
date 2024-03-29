<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario implements UserInterface {

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
     * @ORM\Column(name="contrasenia", type="string", length=255)
     */
    private $contrasenia;

    /**
     * @var string
     *
     * @ORM\Column(name="saved_password", type="string", length=255)
     */
    private $saved_password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\OneToOne(targetEntity="Persona",inversedBy="usuario")
     * @ORM\JoinColumn(name="persona", referencedColumnName="id")
     */
    private $persona;

    /**
     * @ORM\OneToMany(targetEntity="Responsable",mappedBy="usuario",cascade={"persist"})
     */
    private $responsables;

    /**
     * @ORM\OneToMany(targetEntity="Resolucion",mappedBy="usuario")
     */
    private $resolucion;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date()
     */
    protected $fechaBaja;

    /**
     * @var datetime
     *
     * @ORM\Column(name="fecha_alta", type="datetime",nullable=true)
     *
     */
    private $fechaAlta;

    /**
     * @var datetime
     *
     * @ORM\Column(name="fecha_ultima_modificacion", type="datetime",nullable=true)
     *
     */
    private $fechaUltimaModificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario_ultima_modificacion", type="string",length=255,nullable=true)
     *
     */
    private $usuarioUltimaModificacion;

    public function __toString() {
        return $this->iup." - ".$this->persona;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->responsables = new ArrayCollection();
    }

    //AUTENTICACION PARA LOGIN

    function loadUserByUsername($username) {

        $qb = $this->createQueryBuilder('u');
        return
                        $qb->select('u')
                        ->where(
                                $qb->expr()->orx(
                                        $qb->expr()->like('u.iup', ':username'), $qb->expr()->like('u.email', ':username')
                                )
                        )
                        ->andWhere('u.fechaBaja IS NULL')
                        //->andWhere($qb->expr()->eq('u.enabled' ,'true') )
                        ->setParameters(array('username' => $username))
                        ->getQuery()
                        ->getResult();
    }

    function refreshUser(UserInterface $user) {
        return $this->loadUserByUsername($user->getUsername());
    }

    function supportsClass($class) {
        return $class === 'My\UserBundle\Entity\User';
    }

    public function getUsername() {
        return $this->iup;
    }

    public function getSalt() {
        return null;
    }

    public function getRoles() {
        return array($this->getRole());
    }

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        return $this->contrasenia;
        ;
    }

    //FIN AUTENTICACION PARA LOGIN

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set iup
     *
     * @param string $iup
     *
     * @return Usuario
     */
    public function setIup($iup) {
        $this->iup = $iup;

        return $this;
    }

    /**
     * Get iup
     *
     * @return string
     */
    public function getIup() {
        return $this->iup;
    }

    /**
     * Get contrasenia
     *
     * @return string
     */
    public function getContrasenia() {
        return $this->contrasenia;
    }

    /**
     * Set contrasenia
     *
     * @param string $contrasenia
     *
     * @return Usuario
     */
    public function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Usuario
     */
    public function setRole($role) {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Set persona
     *
     * @param integer $persona
     *
     * @return Usuario
     */
    public function setPersona($persona) {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return int
     */
    public function getPersona() {
        return $this->persona;
    }

    /**
     * Add responsable
     *
     * @param \AppBundle\Entity\Responsable $responsable
     *
     * @return Usuario
     */
    public function addResponsable(\AppBundle\Entity\Responsable $responsable) {
        if(get_class($responsable->getUbicacion()) == \AppBundle\Entity\MesaEntrada::class){
                $responsable->getUsuario()->setRole('ROLE_RESPONSABLE');
            }
        $this->responsables[] = $responsable;

        return $this;
    }

    /**
     * Remove responsable
     *
     * @param \AppBundle\Entity\Responsable $responsable
     */
    public function removeResponsable(\AppBundle\Entity\Responsable $responsable) {
        $responsable->getUsuario()->setRole('ROLE_USER');
        $responsable->setFechaBaja(new \DateTime('now'));
        //$this->responsables->removeElement($responsable);
    }

    /**
     * Get responsable
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResponsable() {
       return $this->responsable;
    }

    /**
     * Add resolucion
     *
     * @param \AppBundle\Entity\Resolucion $resolucion
     *
     * @return Usuario
     */
    public function addResolucion(\AppBundle\Entity\Resolucion $resolucion) {
        $this->resolucion[] = $resolucion;

        return $this;
    }

    /**
     * Remove resolucion
     *
     * @param \AppBundle\Entity\Resolucion $resolucion
     */
    public function removeResolucion(\AppBundle\Entity\Resolucion $resolucion) {
        $this->resolucion->removeElement($resolucion);
    }

    /**
     * Get resolucion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResolucion() {
        return $this->resolucion;
    }

    /**
     * Get responsables
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResponsables() {
         $responsables = new ArrayCollection();
        foreach($this->responsables as $res){
            if($res->getFechaBaja() == null){
                $responsables[] = $res;
            }
         }
         return $responsables;
    }

    /**
     * Set savedPassword
     *
     * @param string $savedPassword
     *
     * @return Usuario
     */
    public function setSavedPassword($savedPassword) {
        $this->saved_password = $savedPassword;

        return $this;
    }

    /**
     * Get savedPassword
     *
     * @return string
     */
    public function getSavedPassword() {
        return $this->saved_password;
    }

    /**
     * @Assert\IsTrue(message="La clave debe tener al menos 6 caracteres,
     * No puede tener más de 16 caracteres, 
     * Debe tener al menos una letra minúscula y una mayúscula, 
     * Debe tener al menos un caracter numérico")
     */

    public function getValidarPassword() {
        if (strlen($this->contrasenia) < 6) {
            // La clave debe tener al menos 6 caracteres
            return false;
        }
        if (strlen(($this->contrasenia)) > 16) {
            // La clave no puede tener más de 16 caracteres
            return false;
        }            
        return true;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Usuario
     */
    public function setFechaAlta($fechaAlta) {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return \DateTime
     */
    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    /**
     * Set fechaUltimaModificacion
     *
     * @param \DateTime $fechaUltimaModificacion
     *
     * @return Usuario
     */
    public function setFechaUltimaModificacion($fechaUltimaModificacion) {
        $this->fechaUltimaModificacion = $fechaUltimaModificacion;

        return $this;
    }

    /**
     * Get fechaUltimaModificacion
     *
     * @return \DateTime
     */
    public function getFechaUltimaModificacion() {
        return $this->fechaUltimaModificacion;
    }

    /**
     * Set usuarioUltimaModificacion
     *
     * @param string $usuarioUltimaModificacion
     *
     * @return Usuario
     */
    public function setUsuarioUltimaModificacion($usuarioUltimaModificacion) {
        $this->usuarioUltimaModificacion = $usuarioUltimaModificacion;

        return $this;
    }

    /**
     * Get usuarioUltimaModificacion
     *
     * @return string
     */
    public function getUsuarioUltimaModificacion() {
        return $this->usuarioUltimaModificacion;
    }


    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     *
     * @return Usuario
     */
    public function setFechaBaja($fechaBaja)
    {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime
     */
    public function getFechaBaja()
    {
        return $this->fechaBaja;
    }
}
