<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Persona extends \AppBundle\Entity\Persona implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'apellido', 'nombre', 'dni', 'cargo', 'usuario', 'id'];
        }

        return ['__isInitialized__', 'apellido', 'nombre', 'dni', 'cargo', 'usuario', 'id'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Persona $proxy) {
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
    public function setIdUbicacion($idUbicacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUbicacion', [$idUbicacion]);

        return parent::setIdUbicacion($idUbicacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUbicacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUbicacion', []);

        return parent::getIdUbicacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellido($apellido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellido', [$apellido]);

        return parent::setApellido($apellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellido', []);

        return parent::getApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDni($dni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDni', [$dni]);

        return parent::setDni($dni);
    }

    /**
     * {@inheritDoc}
     */
    public function getDni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDni', []);

        return parent::getDni();
    }

    /**
     * {@inheritDoc}
     */
    public function setCargo($cargo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCargo', [$cargo]);

        return parent::setCargo($cargo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCargo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCargo', []);

        return parent::getCargo();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', [$usuario]);

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', []);

        return parent::getUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function getUbicacionId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUbicacionId', []);

        return parent::getUbicacionId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDependencia($dependencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDependencia', [$dependencia]);

        return parent::setDependencia($dependencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getDependencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDependencia', []);

        return parent::getDependencia();
    }

    /**
     * {@inheritDoc}
     */
    public function addMovimientosExpediente(\AppBundle\Entity\MovimientoExpediente $movimientosExpediente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMovimientosExpediente', [$movimientosExpediente]);

        return parent::addMovimientosExpediente($movimientosExpediente);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMovimientosExpediente(\AppBundle\Entity\MovimientoExpediente $movimientosExpediente)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMovimientosExpediente', [$movimientosExpediente]);

        return parent::removeMovimientosExpediente($movimientosExpediente);
    }

    /**
     * {@inheritDoc}
     */
    public function getMovimientosExpedientes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMovimientosExpedientes', []);

        return parent::getMovimientosExpedientes();
    }

    /**
     * {@inheritDoc}
     */
    public function addResponsable(\AppBundle\Entity\Responsable $responsable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addResponsable', [$responsable]);

        return parent::addResponsable($responsable);
    }

    /**
     * {@inheritDoc}
     */
    public function removeResponsable(\AppBundle\Entity\Responsable $responsable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeResponsable', [$responsable]);

        return parent::removeResponsable($responsable);
    }

    /**
     * {@inheritDoc}
     */
    public function getResponsable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsable', []);

        return parent::getResponsable();
    }

}