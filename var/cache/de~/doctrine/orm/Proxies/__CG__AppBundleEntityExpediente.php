<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Expediente extends \AppBundle\Entity\Expediente implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'nroExpediente', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'tema', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'concepto', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'fojas', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'iniciadorDependencia', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'fechaInicio', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'fechaFin', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'ubicacionActual', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'resolucion', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'caratulas', 'expedientes_asociados', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'movimientos', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'persona', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'mesaentrada', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'lugarfisico'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'nroExpediente', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'tema', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'concepto', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'fojas', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'iniciadorDependencia', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'fechaInicio', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'fechaFin', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'ubicacionActual', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'resolucion', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'caratulas', 'expedientes_asociados', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'movimientos', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'persona', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'mesaentrada', '' . "\0" . 'AppBundle\\Entity\\Expediente' . "\0" . 'lugarfisico'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Expediente $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getLugarfisico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLugarfisico', []);

        return parent::getLugarfisico();
    }

    /**
     * {@inheritDoc}
     */
    public function setLugarfisico(\AppBundle\Entity\Lugarfisico $lugarfisico = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLugarfisico', [$lugarfisico]);

        return parent::setLugarfisico($lugarfisico);
    }

    /**
     * {@inheritDoc}
     */
    public function getPersona()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPersona', []);

        return parent::getPersona();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersona(\AppBundle\Entity\Persona $persona = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersona', [$persona]);

        return parent::setPersona($persona);
    }

    /**
     * {@inheritDoc}
     */
    public function setMesaentrada(\AppBundle\Entity\MesaEntrada $mesaentrada = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMesaentrada', [$mesaentrada]);

        return parent::setMesaentrada($mesaentrada);
    }

    /**
     * {@inheritDoc}
     */
    public function getMesaentrada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMesaentrada', []);

        return parent::getMesaentrada();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNroExpediente($nroExpediente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNroExpediente', [$nroExpediente]);

        return parent::setNroExpediente($nroExpediente);
    }

    /**
     * {@inheritDoc}
     */
    public function getNroExpediente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNroExpediente', []);

        return parent::getNroExpediente();
    }

    /**
     * {@inheritDoc}
     */
    public function setTema($tema)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTema', [$tema]);

        return parent::setTema($tema);
    }

    /**
     * {@inheritDoc}
     */
    public function getTema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTema', []);

        return parent::getTema();
    }

    /**
     * {@inheritDoc}
     */
    public function setConcepto($concepto)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConcepto', [$concepto]);

        return parent::setConcepto($concepto);
    }

    /**
     * {@inheritDoc}
     */
    public function getConcepto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConcepto', []);

        return parent::getConcepto();
    }

    /**
     * {@inheritDoc}
     */
    public function setFojas($fojas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFojas', [$fojas]);

        return parent::setFojas($fojas);
    }

    /**
     * {@inheritDoc}
     */
    public function getFojas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFojas', []);

        return parent::getFojas();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', [$tipo]);

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', []);

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setIniciadorDependencia($iniciadorDependencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIniciadorDependencia', [$iniciadorDependencia]);

        return parent::setIniciadorDependencia($iniciadorDependencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getIniciadorDependencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIniciadorDependencia', []);

        return parent::getIniciadorDependencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaInicio($fechaInicio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaInicio', [$fechaInicio]);

        return parent::setFechaInicio($fechaInicio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaInicio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaInicio', []);

        return parent::getFechaInicio();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaFin($fechaFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaFin', [$fechaFin]);

        return parent::setFechaFin($fechaFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaFin', []);

        return parent::getFechaFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setUbicacionActual($ubicacionActual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUbicacionActual', [$ubicacionActual]);

        return parent::setUbicacionActual($ubicacionActual);
    }

    /**
     * {@inheritDoc}
     */
    public function getUbicacionActual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUbicacionActual', []);

        return parent::getUbicacionActual();
    }

    /**
     * {@inheritDoc}
     */
    public function addCaratula(\AppBundle\Entity\CaratulaAgregada $caratula)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCaratula', [$caratula]);

        return parent::addCaratula($caratula);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCaratula(\AppBundle\Entity\CaratulaAgregada $caratula)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCaratula', [$caratula]);

        return parent::removeCaratula($caratula);
    }

    /**
     * {@inheritDoc}
     */
    public function getCaratulas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCaratulas', []);

        return parent::getCaratulas();
    }

    /**
     * {@inheritDoc}
     */
    public function setResolucion(\AppBundle\Entity\Resolucion $resolucion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResolucion', [$resolucion]);

        return parent::setResolucion($resolucion);
    }

    /**
     * {@inheritDoc}
     */
    public function getResolucion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResolucion', []);

        return parent::getResolucion();
    }

    /**
     * {@inheritDoc}
     */
    public function addExpediente(\AppBundle\Entity\ExpedienteAsociado $expediente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addExpediente', [$expediente]);

        return parent::addExpediente($expediente);
    }

    /**
     * {@inheritDoc}
     */
    public function removeExpediente(\AppBundle\Entity\ExpedienteAsociado $expediente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeExpediente', [$expediente]);

        return parent::removeExpediente($expediente);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpediente()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpediente', []);

        return parent::getExpediente();
    }

    /**
     * {@inheritDoc}
     */
    public function addExpedientesAsociado(\AppBundle\Entity\ExpedienteAsociado $expedientesAsociado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addExpedientesAsociado', [$expedientesAsociado]);

        return parent::addExpedientesAsociado($expedientesAsociado);
    }

    /**
     * {@inheritDoc}
     */
    public function removeExpedientesAsociado(\AppBundle\Entity\ExpedienteAsociado $expedientesAsociado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeExpedientesAsociado', [$expedientesAsociado]);

        return parent::removeExpedientesAsociado($expedientesAsociado);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpedientesAsociados()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpedientesAsociados', []);

        return parent::getExpedientesAsociados();
    }

    /**
     * {@inheritDoc}
     */
    public function addMovimiento(\AppBundle\Entity\MovimientoExpediente $movimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMovimiento', [$movimiento]);

        return parent::addMovimiento($movimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMovimiento(\AppBundle\Entity\MovimientoExpediente $movimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMovimiento', [$movimiento]);

        return parent::removeMovimiento($movimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getMovimientos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMovimientos', []);

        return parent::getMovimientos();
    }

}