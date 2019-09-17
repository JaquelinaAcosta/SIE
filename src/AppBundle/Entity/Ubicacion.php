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
class Ubicacion {

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
     * @ORM\OneToMany(targetEntity="MovimientoExpediente",mappedBy="ubicacion")
     */
    private $movimientosExpedientes;

    /**
     * @ORM\OneToMany(targetEntity="Responsable",mappedBy="ubicacion",cascade={"persist"})
     */
    private $responsables;

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

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario = null) {
        $this->usuario = $usuario;
    }

    public function __construct() {
        $this->movimientosExpedientes = new ArrayCollection();
        $this->responsables = new ArrayCollection();
    }

    public function getUbicacionId() {
        return $this->id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Ubicacion
     */
    public function setId($id) {
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
    public function setDependencia($dependencia) {
        $this->dependencia = $dependencia;

        return $this;
    }

    /**
     * Get dependencia
     *
     * @return int
     */
    public function getDependencia() {
        return $this->dependencia;
    }

    /**
     * Add movimientosExpediente
     *
     * @param \AppBundle\Entity\MovimientoExpediente $movimientosExpediente
     *
     * @return Ubicacion
     */
    public function addMovimientosExpediente(\AppBundle\Entity\MovimientoExpediente $movimientosExpediente) {
        $this->movimientosExpedientes[] = $movimientosExpediente;

        return $this;
    }

    /**
     * Remove movimientosExpediente
     *
     * @param \AppBundle\Entity\MovimientoExpediente $movimientosExpediente
     */
    public function removeMovimientosExpediente(\AppBundle\Entity\MovimientoExpediente $movimientosExpediente) {
        $this->movimientosExpedientes->removeElement($movimientosExpediente);
    }

    /**
     * Get movimientosExpedientes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMovimientosExpedientes() {
        return $this->movimientosExpedientes;
    }

    /**
     * Add responsable
     *
     * @param \AppBundle\Entity\Responsable $responsable
     *
     * @return Ubicacion
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
     * @return Ubicacion
     */
    public function removeResponsable(\AppBundle\Entity\Responsable $responsable) {
        $responsable->getUsuario()->setRole('ROLE_USER');
        $responsable->setFechaBaja(new \DateTime('now'));
       // $this->responsables->removeElement($responsable);
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
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Ubicacion
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
     * @return Ubicacion
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
     * @return Ubicacion
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
     * @return Ubicacion
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
