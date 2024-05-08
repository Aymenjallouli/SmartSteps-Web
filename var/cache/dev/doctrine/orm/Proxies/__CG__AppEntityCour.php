<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Cour extends \App\Entity\Cour implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'Matiere', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'Date_Debut', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'Date_Fin', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'unites'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'Matiere', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'Date_Debut', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'Date_Fin', '' . "\0" . 'App\\Entity\\Cour' . "\0" . 'unites'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Cour $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getMatiere(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatiere', []);

        return parent::getMatiere();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatiere(string $Matiere): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatiere', [$Matiere]);

        return parent::setMatiere($Matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', []);

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut(\DateTimeInterface $Date_Debut): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', [$Date_Debut]);

        return parent::setDateDebut($Date_Debut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFin(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFin', []);

        return parent::getDateFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFin(\DateTimeInterface $Date_Fin): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFin', [$Date_Fin]);

        return parent::setDateFin($Date_Fin);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnites(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnites', []);

        return parent::getUnites();
    }

    /**
     * {@inheritDoc}
     */
    public function addUnite(\App\Entity\Unite $unite): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUnite', [$unite]);

        return parent::addUnite($unite);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function removeUnite(\App\Entity\Unite $unite): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUnite', [$unite]);

        return parent::removeUnite($unite);
    }

}
