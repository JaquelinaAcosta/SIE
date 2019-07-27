<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuarioRepository")
 */
class Usuario implements UserInterface
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
     * @ORM\Column(name="contrasenia", type="string", length=255)
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
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

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
    private $responsables;
    
    
    /**
    * @ORM\OneToMany(targetEntity="Resolucion",mappedBy="usuario")
    */
    private $resolucion;
    
    
    public function __toString() {
       return $this->persona->getApellido().", ".$this->persona->getNombre();
    }
    
    //AUTENTICACION PARA LOGIN
  
    function loadUserByUsername($username){

        $qb = $this->createQueryBuilder('u') ;
        return 
        $qb->select('u')
        ->where(
            $qb->expr()->orx(
                $qb->expr()->like('u.iup' ,':username') ,
                $qb->expr()->like('u.email' ,':username')
            )
        )
        //->andWhere($qb->expr()->eq('u.enabled' ,'true') )
        ->setParameters(array('username' =>$username ) )        
        ->getQuery()
        ->getResult() ;                  
    }

    function refreshUser(UserInterface $user){
        return $this->loadUserByUsername($user->getUsername() );
    }

    function supportsClass($class){
        return $class === 'My\UserBundle\Entity\User';
    }
      
    
    public function getUsername() {
        return $this->iup;
    }
    
    public function getSalt() {
        return null;
    }


    public function getRoles(){
        return array($this->getRole());
    }
    
    public function eraseCredentials() {
        
    }
    
    public function getPassword() {
        return $this->contrasenia;;
    }


    //FIN AUTENTICACION PARA LOGIN
    
    
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
     * Set role
     *
     * @param string $role
     *
     * @return Usuario
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
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

    /**
     * Get responsables
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResponsables()
    {
        return $this->responsables;
    }
}
