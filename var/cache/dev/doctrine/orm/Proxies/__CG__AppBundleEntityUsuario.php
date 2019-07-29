<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \AppBundle\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'iup', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'contrasenia', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'role', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'persona', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'responsables', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'resolucion'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'iup', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'contrasenia', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'role', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'persona', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'responsables', '' . "\0" . 'AppBundle\\Entity\\Usuario' . "\0" . 'resolucion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
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
    public function loadUserByUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'loadUserByUsername', [$username]);

        return parent::loadUserByUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'refreshUser', [$user]);

        return parent::refreshUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function supportsClass($class)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'supportsClass', [$class]);

        return parent::supportsClass($class);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
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
    public function setIup($iup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIup', [$iup]);

        return parent::setIup($iup);
    }

    /**
     * {@inheritDoc}
     */
    public function getIup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIup', []);

        return parent::getIup();
    }

    /**
     * {@inheritDoc}
     */
    public function getContrasenia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContrasenia', []);

        return parent::getContrasenia();
    }

    /**
     * {@inheritDoc}
     */
    public function setContrasenia($contrasenia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContrasenia', [$contrasenia]);

        return parent::setContrasenia($contrasenia);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function setRole($role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRole', [$role]);

        return parent::setRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRole', []);

        return parent::getRole();
    }

    /**
     * {@inheritDoc}
     */
    public function setPersona($persona)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPersona', [$persona]);

        return parent::setPersona($persona);
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

    /**
     * {@inheritDoc}
     */
    public function addResolucion(\AppBundle\Entity\Resolucion $resolucion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addResolucion', [$resolucion]);

        return parent::addResolucion($resolucion);
    }

    /**
     * {@inheritDoc}
     */
    public function removeResolucion(\AppBundle\Entity\Resolucion $resolucion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeResolucion', [$resolucion]);

        return parent::removeResolucion($resolucion);
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
    public function getResponsables()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResponsables', []);

        return parent::getResponsables();
    }

}