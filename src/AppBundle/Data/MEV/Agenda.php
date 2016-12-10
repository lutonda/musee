<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 *
 * @ORM\Table(name="Agenda", indexes={@ORM\Index(name="fk_eventos_1", columns={"idEvento"}), @ORM\Index(name="fk_local_1", columns={"local"}), @ORM\Index(name="fk_orador_1", columns={"orador"})})
 * @ORM\Entity
 */
class Agenda
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoria", type="integer", nullable=true)
     */
    private $categoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="hora", type="integer", nullable=true)
     */
    private $hora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAgenda", type="datetime", nullable=true)
     */
    private $dataagenda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var \Evento
     *
     * @ORM\ManyToOne(targetEntity="Evento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEvento", referencedColumnName="id")
     * })
     */
    private $idevento;

    /**
     * @var \Lugar
     *
     * @ORM\ManyToOne(targetEntity="Lugar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local", referencedColumnName="id")
     * })
     */
    private $local;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orador", referencedColumnName="id")
     * })
     */
    private $orador;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categoria
     *
     * @param integer $categoria
     *
     * @return Agenda
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return integer
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set hora
     *
     * @param integer $hora
     *
     * @return Agenda
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return integer
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set dataagenda
     *
     * @param \DateTime $dataagenda
     *
     * @return Agenda
     */
    public function setDataagenda($dataagenda)
    {
        $this->dataagenda = $dataagenda;

        return $this;
    }

    /**
     * Get dataagenda
     *
     * @return \DateTime
     */
    public function getDataagenda()
    {
        return $this->dataagenda;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Agenda
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set idevento
     *
     * @param \AppBundle\Entity\Evento $idevento
     *
     * @return Agenda
     */
    public function setIdevento(\AppBundle\Entity\Evento $idevento = null)
    {
        $this->idevento = $idevento;

        return $this;
    }

    /**
     * Get idevento
     *
     * @return \AppBundle\Entity\Evento
     */
    public function getIdevento()
    {
        return $this->idevento;
    }

    /**
     * Set local
     *
     * @param \AppBundle\Entity\Lugar $local
     *
     * @return Agenda
     */
    public function setLocal(\AppBundle\Entity\Lugar $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \AppBundle\Entity\Lugar
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set orador
     *
     * @param \AppBundle\Entity\Pessoa $orador
     *
     * @return Agenda
     */
    public function setOrador(\AppBundle\Entity\Pessoa $orador = null)
    {
        $this->orador = $orador;

        return $this;
    }

    /**
     * Get orador
     *
     * @return \AppBundle\Entity\Pessoa
     */
    public function getOrador()
    {
        return $this->orador;
    }
}
