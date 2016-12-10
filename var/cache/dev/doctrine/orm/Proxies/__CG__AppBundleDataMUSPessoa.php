<?php

namespace Proxies\__CG__\AppBundle\Data\MUS;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pessoa extends \AppBundle\Data\MUS\Pessoa implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'id', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'nome', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'numero', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'nivelacademico', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'genero', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'datanacimento', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'data', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'curso', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'especialidade', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'morada', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'naturalidade', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'contactos'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'id', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'nome', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'numero', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'nivelacademico', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'tipo', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'genero', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'datanacimento', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'data', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'curso', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'especialidade', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'morada', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'naturalidade', '' . "\0" . 'AppBundle\\Data\\MUS\\Pessoa' . "\0" . 'contactos'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pessoa $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setNome($nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNome', [$nome]);

        return parent::setNome($nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNome', []);

        return parent::getNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumero($numero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumero', [$numero]);

        return parent::setNumero($numero);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumero', []);

        return parent::getNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setNivelacademico($nivelacademico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNivelacademico', [$nivelacademico]);

        return parent::setNivelacademico($nivelacademico);
    }

    /**
     * {@inheritDoc}
     */
    public function getNivelacademico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNivelacademico', []);

        return parent::getNivelacademico();
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
    public function setGenero($genero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenero', [$genero]);

        return parent::setGenero($genero);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenero', []);

        return parent::getGenero();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatanacimento($datanacimento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatanacimento', [$datanacimento]);

        return parent::setDatanacimento($datanacimento);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatanacimento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatanacimento', []);

        return parent::getDatanacimento();
    }

    /**
     * {@inheritDoc}
     */
    public function setData($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setData', [$data]);

        return parent::setData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getData', []);

        return parent::getData();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurso(\AppBundle\Data\MUS\Curso $curso = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurso', [$curso]);

        return parent::setCurso($curso);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurso', []);

        return parent::getCurso();
    }

    /**
     * {@inheritDoc}
     */
    public function setEspecialidade(\AppBundle\Data\MUS\Curso $especialidade = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEspecialidade', [$especialidade]);

        return parent::setEspecialidade($especialidade);
    }

    /**
     * {@inheritDoc}
     */
    public function getEspecialidade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEspecialidade', []);

        return parent::getEspecialidade();
    }

    /**
     * {@inheritDoc}
     */
    public function setMorada(\AppBundle\Data\SYS\Municipio $morada = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMorada', [$morada]);

        return parent::setMorada($morada);
    }

    /**
     * {@inheritDoc}
     */
    public function getMorada()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMorada', []);

        return parent::getMorada();
    }

    /**
     * {@inheritDoc}
     */
    public function setNaturalidade(\AppBundle\Data\SYS\Municipio $naturalidade = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNaturalidade', [$naturalidade]);

        return parent::setNaturalidade($naturalidade);
    }

    /**
     * {@inheritDoc}
     */
    public function getNaturalidade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNaturalidade', []);

        return parent::getNaturalidade();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactos(array $contactos = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactos', [$contactos]);

        return parent::setContactos($contactos);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactos', []);

        return parent::getContactos();
    }

}