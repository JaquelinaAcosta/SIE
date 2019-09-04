<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
USE Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\CaratulaAgregada;
use AppBundle\Entity\Resolucion;
use AppBundle\Entity\Dependencia;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints\Collection;

/**
 * Expediente
 *
 * @ORM\Table(name="expediente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExpedienteRepository")
 */
class Expediente {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="CaratulaAgregada", mappedBy="expediente")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="codigo_expediente")
     */
    private $codigoExpediente;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_expediente")
     */
    private $numeroExpediente;

    /**
     * @var int
     *
     * @ORM\Column(name="digito_expediente")
     */
    private $digitoExpediente;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Tema",inversedBy="expedientes") 
     * @ORM\JoinColumn(name="tema", referencedColumnName="id", nullable=false)
     */
    private $tema;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="text", length=21845, nullable=true)
     */
    private $concepto;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @var int
     *
     * @ORM\Column(name="fojas", type="integer")
     */
    private $fojas;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var int 
     * @ORM\ManyToOne(targetEntity="Dependencia",inversedBy="expedientes")
     * @ORM\JoinColumn(name="iniciadorDependencia", referencedColumnName="id", nullable=false)
     */
    private $iniciadorDependencia;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_carga", type="datetime",nullable=true)
     */
    private $fechaCarga;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_inicio", type="datetime",nullable=true)
     */
    private $fechaInicio;

    /**
     * @var string
     *
     * @ORM\Column(name="fecha_baja", type="datetime",nullable=true)
     */
    private $fechaBaja;

    /**
     * @var string
     * @ORM\Column(name="fecha_fin", type="datetime",nullable=true)
     */
    private $fechaFin;

    /**
     * @ORM\ManyToOne(targetEntity="Ubicacion")
     */
    private $ubicacionActual;

    /**
     * @ORM\ManyToOne(targetEntity="Ubicacion")
     */
    private $ultimaUbicacion;

    /**
     * @ORM\OneToOne(targetEntity="Resolucion", mappedBy="expediente")
     */
    private $resolucion;

    /**
     * @ORM\OneToMany(targetEntity="CaratulaAgregada", mappedBy="expediente",cascade={"persist"})
     */
    private $caratulas;

    /**
     * @ORM\OneToMany(targetEntity="ExpedienteAsociado", mappedBy="expedientePadre",cascade={"persist"})
     */
    protected $expedientes_asociados;

    /**
     * @ORM\OneToMany(targetEntity="MovimientoExpediente", mappedBy="expediente",cascade={"persist"})
     */
    private $movimientos;

    /**
     * @Assert\Type(type="AppBundle\Entity\Persona")
     * @Assert\Valid
     */
    private $persona;

    /**
     * @Assert\Type(type="AppBundle\Entity\MesaEntrada")
     * @Assert\Valid
     */
    private $mesaentrada;

    /**
     * @Assert\Type(type="AppBundle\Entity\LugarFisico")
     * @Assert\Valid
     */
    private $lugarfisico;

    public function __toString() {
        return $this->codigoExpediente . "-" . $this->numeroExpediente . "-" . $this->digitoExpediente;
    }

    public function __construct() {
        $this->expedientes_asociados = new ArrayCollection();
        $this->caratulas = new ArrayCollection();
//        $this->caratulas = new ArrayCollection();
        $this->movimientos = new ArrayCollection();
    }

    public function getLugarfisico() {
        return $this->lugarfisico;
    }

    public function setLugarfisico(Lugarfisico $lugarfisico = null) {
        $this->lugarfisico = $lugarfisico;
    }

    public function getPersona() {
        return $this->persona;
    }

    public function setPersona(Persona $persona = null) {
        $this->persona = $persona;
    }

    public function setMesaentrada(MesaEntrada $mesaentrada = null) {
        $this->mesaentrada = $mesaentrada;
    }

    public function getMesaentrada() {
        return $this->mesaentrada;
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
     * Set nroExpediente
     *
     * @param integer $nroExpediente
     *
     * @return Expediente
     */
    public function setNroExpediente($nroExpediente) {
        $this->nroExpediente = $nroExpediente;

        return $this;
    }

    /**
     * Get nroExpediente
     *
     * @return int
     */
    public function getNroExpediente() {
        return $this->nroExpediente;
    }

    /**
     * Set tema
     *
     * @param integer $tema
     *
     * @return Expediente
     */
    public function setTema($tema) {
        $this->tema = $tema;
        return $this;
    }

    /**
     * Get tema
     *
     * @return int
     */
    public function getTema() {
        return $this->tema;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     *
     * @return Expediente
     */
    public function setConcepto($concepto) {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string
     */
    public function getConcepto() {
        return $this->concepto;
    }

    /**
     * Set fojas
     *
     * @param integer $fojas
     *
     * @return Expediente
     */
    public function setFojas($fojas) {
        $this->fojas = $fojas;

        return $this;
    }

    /**
     * Get fojas
     *
     * @return int
     */
    public function getFojas() {
        return $this->fojas;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Expediente
     */
    public function setTipo($tipo) {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo() {
        return $this->tipo;
    }

    /**
     * Set iniciadorDependencia
     *
     * @param integer $iniciadorDependencia
     *
     * @return Expediente
     */
    public function setIniciadorDependencia($iniciadorDependencia) {
        $this->iniciadorDependencia = $iniciadorDependencia;

        return $this;
    }

    /**
     * Get iniciadorDependencia
     *
     * @return int
     */
    public function getIniciadorDependencia() {
        return $this->iniciadorDependencia;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Expediente
     */
    public function setFechaInicio($fechaInicio) {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio() {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Expediente
     */
    public function setFechaFin($fechaFin) {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin() {
        return $this->fechaFin;
    }

    /**
     * Set ubicacionActual
     *
     * @param string $ubicacionActual
     *
     * @return Expediente
     */
    public function setUbicacionActual($ubicacionActual) {
        $this->ubicacionActual = $ubicacionActual;

        return $this;
    }

    /**
     * Get ubicacionActual
     *
     * @return string
     */
    public function getUbicacionActual() {
        return $this->ubicacionActual;
    }

    /**
     * Add caratula
     *
     * @param \AppBundle\Entity\CaratulaAgregada $caratula
     *
     * @return Expediente
     */
    public function addCaratula(\AppBundle\Entity\CaratulaAgregada $caratula) {
        $this->caratulas[] = $caratula;

        return $this;
    }

    /**
     * Remove caratula
     *
     * @param \AppBundle\Entity\CaratulaAgregada $caratula
     */
    public function removeCaratula(\AppBundle\Entity\CaratulaAgregada $caratula) {
        $this->caratulas->removeElement($caratula);
    }

    /**
     * Get caratulas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCaratulas() {
        return $this->caratulas;
    }

    /**
     * Set resolucion
     *
     * @param \AppBundle\Entity\Resolucion $resolucion
     *
     * @return Expediente
     */
    public function setResolucion(\AppBundle\Entity\Resolucion $resolucion = null) {
        $this->resolucion = $resolucion;
        return $this;
    }

    /**
     * Get resolucion
     *
     * @return \AppBundle\Entity\Resolucion
     */
    public function getResolucion() {
        return $this->resolucion;
    }

    /**
     * Add expediente
     *
     * @param \AppBundle\Entity\ExpedienteAsociado $expediente
     *
     * @return Expediente
     */
    public function addExpediente(\AppBundle\Entity\ExpedienteAsociado $expediente) {
        $this->expediente[] = $expediente;

        return $this;
    }

    /**
     * Remove expediente
     *
     * @param \AppBundle\Entity\ExpedienteAsociado $expediente
     */
    public function removeExpediente(\AppBundle\Entity\ExpedienteAsociado $expediente) {
        $this->expediente->removeElement($expediente);
    }

    /**
     * Get expediente
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExpediente() {
        return $this->expediente;
    }

    /**
     * Add expedientesAsociado
     *
     * @param \AppBundle\Entity\ExpedienteAsociado $expedientesAsociado
     *
     * @return Expediente
     */
    public function addExpedientesAsociado(\AppBundle\Entity\ExpedienteAsociado $expedientesAsociado) {
        $this->expedientes_asociados[] = $expedientesAsociado;

        return $this;
    }

    /**
     * Remove expedientesAsociado
     *
     * @param \AppBundle\Entity\ExpedienteAsociado $expedientesAsociado
     */
    public function removeExpedientesAsociado(\AppBundle\Entity\ExpedienteAsociado $expedientesAsociado) {
        $this->expedientes_asociados->removeElement($expedientesAsociado);
    }

    /**
     * Get expedientesAsociados
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExpedientesAsociados() {
        return $this->expedientes_asociados;
    }

    /**
     * Add movimiento
     *
     * @param \AppBundle\Entity\MovimientoExpediente $movimiento
     *
     * @return Expediente
     */
    public function addMovimiento(\AppBundle\Entity\MovimientoExpediente $movimiento) {
        $this->movimientos[] = $movimiento;

        return $this;
    }

    /**
     * Remove movimiento
     *
     * @param \AppBundle\Entity\MovimientoExpediente $movimiento
     */
    public function removeMovimiento(\AppBundle\Entity\MovimientoExpediente $movimiento) {
        $this->movimientos->removeElement($movimiento);
    }

    /**
     * Get movimientos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMovimientos() {
        return $this->movimientos;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Expediente
     */
    public function setEstado($estado) {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado() {
        return $this->estado;
    }

    /**
     * Set codigoExpediente
     *
     * @param string $codigoExpediente
     *
     * @return Expediente
     */
    public function setCodigoExpediente($codigoExpediente) {
        $this->codigoExpediente = $codigoExpediente;

        return $this;
    }

    /**
     * Get codigoExpediente
     *
     * @return string
     */
    public function getCodigoExpediente() {
        return $this->codigoExpediente;
    }

    /**
     * Set numeroExpdiente
     *
     * @param string $numeroExpdiente
     *
     * @return Expediente
     */
    public function setNumeroExpdiente($numeroExpdiente) {
        $this->numeroExpdiente = $numeroExpdiente;

        return $this;
    }

    /**
     * Get numeroExpdiente
     *
     * @return string
     */
    public function getNumeroExpdiente() {
        return $this->numeroExpdiente;
    }

    /**
     * Set digitoExpediente
     *
     * @param string $digitoExpediente
     *
     * @return Expediente
     */
    public function setDigitoExpediente($digitoExpediente) {
        $this->digitoExpediente = $digitoExpediente;

        return $this;
    }

    /**
     * Get digitoExpediente
     *
     * @return string
     */
    public function getDigitoExpediente() {
        return $this->digitoExpediente;
    }

    /**
     * Set numeroExpediente
     *
     * @param string $numeroExpediente
     *
     * @return Expediente
     */
    public function setNumeroExpediente($numeroExpediente) {
        $this->numeroExpediente = $numeroExpediente;

        return $this;
    }

    /**
     * Get numeroExpediente
     *
     * @return string
     */
    public function getNumeroExpediente() {
        return $this->numeroExpediente;
    }

    /**
     * Set ultimaUbicacion
     *
     * @param \AppBundle\Entity\Ubicacion $ultimaUbicacion
     *
     * @return Expediente
     */
    public function setUltimaUbicacion(\AppBundle\Entity\Ubicacion $ultimaUbicacion = null) {
        $this->ultimaUbicacion = $ultimaUbicacion;

        return $this;
    }

    /**
     * Get ultimaUbicacion
     *
     * @return \AppBundle\Entity\Ubicacion
     */
    public function getUltimaUbicacion() {
        return $this->ultimaUbicacion;
    }

    /**
     * @Assert\IsTrue(message="El Codigo de Expediente debe tener 5 Dígitos.")
     */
    public function getValidarCodigoExpediente() {
        if (strlen($this->codigoExpediente) == 5) {
            return true;
        }
        return false;
    }

    /**
     * @Assert\IsTrue(message="El Número de Expediente debe tener 7 Dígitos.")
     */
    public function getValidarNumeroExpediente() {
        if (strlen($this->numeroExpediente) == 7) {
            return true;
        }
        return false;
    }

    /**
     * @Assert\IsTrue(message="El Dígito de Expediente debe tener longitud 1.")
     */
    public function getValidarDigitoExpediente() {
        if (strlen($this->digitoExpediente) == 1) {
            return true;
        }
        return false;
    }

    /**
     * @Assert\IsTrue(message="La fecha de inicio debe ser menor que la de fin.")
     */
    public function getValidarFecha() {
        if ($this->fechaFin == null or ($this->fechaInicio) <= ($this->fechaFin)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @Assert\IsTrue(message="La cantidad de fojas debe ser mayor que 0")
     */
    public function getValidarFojas() {
        if (($this->fojas) > 0) {
            return true;
        }
        return false;
    }

    /**
     * Set fechaBaja
     *
     * @param \DateTime $fechaBaja
     *
     * @return Expediente
     */
    public function setFechaBaja($fechaBaja) {
        $this->fechaBaja = $fechaBaja;

        return $this;
    }

    /**
     * Get fechaBaja
     *
     * @return \DateTime
     */
    public function getFechaBaja() {
        return $this->fechaBaja;
    }


    /**
     * Set fechaCarga
     *
     * @param \DateTime $fechaCarga
     *
     * @return Expediente
     */
    public function setFechaCarga($fechaCarga)
    {
        $this->fechaCarga = $fechaCarga;

        return $this;
    }

    /**
     * Get fechaCarga
     *
     * @return \DateTime
     */
    public function getFechaCarga()
    {
        return $this->fechaCarga;
    }
}
