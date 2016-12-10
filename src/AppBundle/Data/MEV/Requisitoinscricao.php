<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requisitoinscricao
 *
 * @ORM\Table(name="RequisitoInscricao", indexes={@ORM\Index(name="fk_agenda_1", columns={"idAgenda"})})
 * @ORM\Entity
 */
class Requisitoinscricao
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
     * @ORM\Column(name="idadeInicial", type="integer", nullable=true)
     */
    private $idadeinicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="idadeFinal", type="integer", nullable=true)
     */
    private $idadefinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="genero", type="integer", nullable=true)
     */
    private $genero;

    /**
     * @var integer
     *
     * @ORM\Column(name="nacionalidade", type="integer", nullable=true)
     */
    private $nacionalidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="grupo", type="integer", nullable=true)
     */
    private $grupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelAcademico", type="integer", nullable=true)
     */
    private $nivelacademico;

    /**
     * @var integer
     *
     * @ORM\Column(name="fechado", type="integer", nullable=true)
     */
    private $fechado;

    /**
     * @var \Agenda
     *
     * @ORM\ManyToOne(targetEntity="Agenda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgenda", referencedColumnName="id")
     * })
     */
    private $idagenda;



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
     * Set idadeinicial
     *
     * @param integer $idadeinicial
     *
     * @return Requisitoinscricao
     */
    public function setIdadeinicial($idadeinicial)
    {
        $this->idadeinicial = $idadeinicial;

        return $this;
    }

    /**
     * Get idadeinicial
     *
     * @return integer
     */
    public function getIdadeinicial()
    {
        return $this->idadeinicial;
    }

    /**
     * Set idadefinal
     *
     * @param integer $idadefinal
     *
     * @return Requisitoinscricao
     */
    public function setIdadefinal($idadefinal)
    {
        $this->idadefinal = $idadefinal;

        return $this;
    }

    /**
     * Get idadefinal
     *
     * @return integer
     */
    public function getIdadefinal()
    {
        return $this->idadefinal;
    }

    /**
     * Set genero
     *
     * @param integer $genero
     *
     * @return Requisitoinscricao
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return integer
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set nacionalidade
     *
     * @param integer $nacionalidade
     *
     * @return Requisitoinscricao
     */
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get nacionalidade
     *
     * @return integer
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set grupo
     *
     * @param integer $grupo
     *
     * @return Requisitoinscricao
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return integer
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set nivelacademico
     *
     * @param integer $nivelacademico
     *
     * @return Requisitoinscricao
     */
    public function setNivelacademico($nivelacademico)
    {
        $this->nivelacademico = $nivelacademico;

        return $this;
    }

    /**
     * Get nivelacademico
     *
     * @return integer
     */
    public function getNivelacademico()
    {
        return $this->nivelacademico;
    }

    /**
     * Set fechado
     *
     * @param integer $fechado
     *
     * @return Requisitoinscricao
     */
    public function setFechado($fechado)
    {
        $this->fechado = $fechado;

        return $this;
    }

    /**
     * Get fechado
     *
     * @return integer
     */
    public function getFechado()
    {
        return $this->fechado;
    }

    /**
     * Set idagenda
     *
     * @param \AppBundle\Entity\Agenda $idagenda
     *
     * @return Requisitoinscricao
     */
    public function setIdagenda(\AppBundle\Entity\Agenda $idagenda = null)
    {
        $this->idagenda = $idagenda;

        return $this;
    }

    /**
     * Get idagenda
     *
     * @return \AppBundle\Entity\Agenda
     */
    public function getIdagenda()
    {
        return $this->idagenda;
    }
}
