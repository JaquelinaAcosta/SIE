<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
USE Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\CaratulaAgregada;
use AppBundle\Entity\Resolucion;
use AppBundle\Entity\Dependencia;
use Doctrine\Common\Collections\ArrayCollection;

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
    private $fojas = 0;
    
    private $totalFojas = 0;
    
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
     * @var datetime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime",nullable=true)
     */
    private $fechaInicio;

    /**
     * @var string
     * @ORM\Column(name="fecha_fin", type="datetime",nullable=true)
     */
    private $fechaFin;

    /**
     * @ORM\ManyToOne(targetEntity="MovimientoExpediente",cascade={"persist"})
     */
    private $movimientoActual;

    /**
     * @ORM\ManyToOne(targetEntity="MovimientoExpediente",cascade={"persist"})
     */
    private $ultimoMovimiento;

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

    /**
    * @ORM\ManyToOne(targetEntity="Usuario",cascade={"persist"})
    */
    private $usuarioAlta;

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
        return $this->codigoExpediente . "-" . $this->numeroExpediente . "-" . $this->digitoExpediente;
    }

    public function __construct() {
        $this->expedientes_asociados = new ArrayCollection();
        $this->caratulas = new ArrayCollection();
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
         $caratulas = new ArrayCollection();
        foreach($this->caratulas as $car){
            if($car->getFechaBaja() == null){
                $caratulas[] = $car;
            }
         }
         return $caratulas;
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
        $expedientes_asociados = new ArrayCollection();
        foreach($this->expedientes_asociados as $aso){
            if($aso->getExpedienteAsociado()->getFechaBaja() == null){
                $expedientes_asociados[] = $aso;
            }
         }
         return $expedientes_asociados;
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
        $movimientos = new ArrayCollection();
        foreach($this->movimientos as $mov){
            if($mov->getFechaBaja() == null){
                $movimientos[] = $mov;
            }
         }
         return $movimientos;
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
        if ($this->fechaFin == null or ( $this->fechaInicio) <= ($this->fechaFin)) {
            return true;
        } else {
            return false;
        }
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
    public function setFechaCarga($fechaCarga) {
        $this->fechaCarga = $fechaCarga;

        return $this;
    }

    /**
     * Get fechaCarga
     *
     * @return \DateTime
     */
    public function getFechaCarga() {
        return $this->fechaCarga;
    }

    /**
     * Set fechaAlta
     *
     * @param \DateTime $fechaAlta
     *
     * @return Expediente
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
     * @return Expediente
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
     * @return Expediente
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
     * Set movimientoActual
     *
     * @param \AppBundle\Entity\MovimientoExpediente $movimientoActual
     *
     * @return Expediente
     */
    public function setMovimientoActual(\AppBundle\Entity\MovimientoExpediente $movimientoActual = null)
    {
        $this->movimientoActual = $movimientoActual;

        return $this;
    }

    /**
     * Get movimientoActual
     *
     * @return \AppBundle\Entity\MovimientoExpediente
     */
    public function getMovimientoActual()
    {
        return $this->movimientoActual;
    }

    /**
     * Set ultimoMovimiento
     *
     * @param \AppBundle\Entity\MovimientoExpediente $ultimoMovimiento
     *
     * @return Expediente
     */
    public function setUltimoMovimiento(\AppBundle\Entity\MovimientoExpediente $ultimoMovimiento = null)
    {
        $this->ultimoMovimiento = $ultimoMovimiento;

        return $this;
    }

    /**
     * Get ultimoMovimiento
     *
     * @return \AppBundle\Entity\MovimientoExpediente
     */
    public function getUltimoMovimiento()
    {
        return $this->ultimoMovimiento;
    }
    
    public function getTotalFojas(){
         $fojasIniciales = $this->fojas;

        foreach ($this->getCaratulas() as $caratula) {
            if ($caratula->getFechaBaja() == null) {
                $fojasIniciales = $fojasIniciales + $caratula->getFojas();
            }
        }

        foreach ($this->getMovimientos() as $movimiento) {
            if ($movimiento->getFechaBaja() == null) {
                $fojasIniciales = $fojasIniciales + $movimiento->getFojas();
            }
        }

        foreach ($this->getExpedientesAsociados() as $asociado) {
            if ($asociado->getFechaBaja() == null) {
                $fojasIniciales = $fojasIniciales + $asociado->getExpedienteAsociado()->getFojas();
                foreach ($asociado->getExpedienteAsociado()->getCaratulas() as $caratula) {
                    $fojasIniciales = $fojasIniciales + $caratula->getFojas();
                }
                foreach ($asociado->getExpedienteAsociado()->getMovimientos() as $movimiento) {
                    $fojasIniciales = $fojasIniciales + $movimiento->getFojas();
                }
            }
        }
        $this->totalFojas = $fojasIniciales;
        return $this->totalFojas;
    }
    

    /**
     * Set usuarioAlta
     *
     * @param \AppBundle\Entity\Usuario $usuarioAlta
     *
     * @return Expediente
     */
    public function setUsuarioAlta(\AppBundle\Entity\Usuario $usuarioAlta = null)
    {
        $this->usuarioAlta = $usuarioAlta;

        return $this;
    }

    /**
     * Get usuarioAlta
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuarioAlta()
    {
        return $this->usuarioAlta;
    }
}
