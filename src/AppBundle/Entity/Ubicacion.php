<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Persona;
use AppBundle\Entity\MesaEntrada;
use AppBundle\Entity\LugarFisico;
use AppBundle\Entity\MovimientoExpediente;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Ubicacion
 *
 * @ORM\Table(name="ubicacion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UbicacionRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="tipos",type="string")
 * @ORM\DiscriminatorMap({"ubicacion"="Ubicacion","persona"="Persona","lugarfisico"="LugarFisico","mesaentrada" = "MesaEntrada"})
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
    protected $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Dependencia",inversedBy="ubicaciones",cascade={"persist"})
     * @ORM\JoinColumn(name="dependencia_id", referencedColumnName="id", nullable=true)
     */
    private $dependencia;

    /**
    *@ORM\OneToMany(targetEntity="MovimientoExpediente",mappedBy="ubicacion")
    */
    private $movimientosExpedientes;
    
    
    /**
    * @ORM\OneToMany(targetEntity="Responsable",mappedBy="ubicacion",cascade={"persist"})
    */
    private $responsables;
       
     /**
     * @Assert\Type(type="App\Entity\Usuario")
     * @Assert\Valid
     */
    protected $usuario;


    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario = null)
    {
        $this->usuario = $usuario;
    }
    
    public function __construct(){
        $this->movimientosExpedientes = new ArrayCollection();
        $this->responsables = new ArrayCollection();
    }

    public function getUbicacionId(){
        return $this->id;
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
     * Set id
     *
     * @param integer $id
     *
     * @return Ubicacion
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

    /**
     * Add movimientosExpediente
     *
     * @param \AppBundle\Entity\MovimientoExpediente $movimientosExpediente
     *
     * @return Ubicacion
     */
    public function addMovimientosExpediente(\AppBundle\Entity\MovimientoExpediente $movimientosExpediente)
    {
        $this->movimientosExpedientes[] = $movimientosExpediente;

        return $this;
    }

    /**
     * Remove movimientosExpediente
     *
     * @param \AppBundle\Entity\MovimientoExpediente $movimientosExpediente
     */
    public function removeMovimientosExpediente(\AppBundle\Entity\MovimientoExpediente $movimientosExpediente)
    {
        $this->movimientosExpedientes->removeElement($movimientosExpediente);
    }

    /**
     * Get movimientosExpedientes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMovimientosExpedientes()
    {
        return $this->movimientosExpedientes;
    }

    /**
     * Add responsable
     *
     * @param \AppBundle\Entity\Responsable $responsable
     *
     * @return Ubicacion
     */
    public function addResponsable(\AppBundle\Entity\Responsable $responsable)
    {
        $this->responsables[] = $responsable;

        return $this;
    }

    /**
     * Remove responsable
     *
     * @param \AppBundle\Entity\Responsable $responsable
     */
    public function removeResponsable(\AppBundle\Entity\Responsable $responsable)
    {
        $this->responsables->removeElement($responsable);
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
     * Get responsables
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResponsables()
    {
        return $this->responsables;
    }
    
    
}
