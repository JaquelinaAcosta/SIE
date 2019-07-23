<?php

namespace AppBundle\Entity;
USE Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * MovimientoExpediente
 *
 * @ORM\Table(name="movimiento_expediente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MovimientoExpedienteRepository")
 */
class MovimientoExpediente
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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Expediente", inversedBy="movimientos")
     * @ORM\JoinColumn(name="expediente", referencedColumnName="id", nullable=false)
     */
    private $expediente;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Ubicacion",inversedBy="movimientosExpedientes")
     * @ORM\JoinColumn(name="ubicacion", referencedColumnName="id", nullable=false)
     */
    private $ubicacion;

    /**
     * @var int
     *
     * @ORM\Column(name="fojas", type="integer")
     */
    private $fojas;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario", type="integer")
     */
    private $usuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=255)
     */
    private $comentario;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_salida", type="string", length=255)
     */
    private $tipoSalida;

     
    /**
     *@Assert\Type(type="AppBundle\Entity\Persona")
     *@Assert\Valid
     */
    private $persona;
    
    
    /**
     *@Assert\Type(type="AppBundle\Entity\MesaEntrada")
     *@Assert\Valid
     */
    private $mesaentrada;
    
    
    /**
     *@Assert\Type(type="AppBundle\Entity\LugarFisico")
     *@Assert\Valid
     */
    private $lugarfisico;
    
    
    
        public function getLugarfisico()
    {
        return $this->lugarfisico;
    }
    public function setLugarfisico(Lugarfisico $lugarfisico = null)
    {
        $this->lugarfisico = $lugarfisico;
    }
    
    public function getPersona()
    {
        return $this->persona;
    }
    public function setPersona(Persona $persona = null)
    {
        $this->persona = $persona;
    }
    public function setMesaentrada(MesaEntrada $mesaentrada = null)
    {
        $this->mesaentrada = $mesaentrada;
    }
    
     public function getMesaentrada()
    {
        return $this->mesaentrada;
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
     * Set expediente
     *
     * @param integer $expediente
     *
     * @return MovimientoExpediente
     */
    public function setExpediente($expediente)
    {
        $this->expediente = $expediente;

        return $this;
    }

    /**
     * Get expediente
     *
     * @return int
     */
    public function getExpediente()
    {
        return $this->expediente;
    }

    /**
     * Set ubicacion
     *
     * @param integer $ubicacion
     *
     * @return MovimientoExpediente
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return int
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set fojas
     *
     * @param integer $fojas
     *
     * @return MovimientoExpediente
     */
    public function setFojas($fojas)
    {
        $this->fojas = $fojas;

        return $this;
    }

    /**
     * Get fojas
     *
     * @return int
     */
    public function getFojas()
    {
        return $this->fojas;
    }

    /**
     * Set usuario
     *
     * @param integer $usuario
     *
     * @return MovimientoExpediente
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return int
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return MovimientoExpediente
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return MovimientoExpediente
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return MovimientoExpediente
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set tipoSalida
     *
     * @param string $tipoSalida
     *
     * @return MovimientoExpediente
     */
    public function setTipoSalida($tipoSalida)
    {
        $this->tipoSalida = $tipoSalida;

        return $this;
    }

    /**
     * Get tipoSalida
     *
     * @return string
     */
    public function getTipoSalida()
    {
        return $this->tipoSalida;
    }
}
