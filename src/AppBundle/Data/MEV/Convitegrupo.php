<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convitegrupo
 *
 * @ORM\Table(name="ConviteGrupo", indexes={@ORM\Index(name="fk_convitegrupo_1", columns={"idAgenda"}), @ORM\Index(name="fk_grupo_1", columns={"idGrupo"})})
 * @ORM\Entity
 */
class Convitegrupo
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
     * @var boolean
     *
     * @ORM\Column(name="confirmacao", type="boolean", nullable=true)
     */
    private $confirmacao;

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
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGrupo", referencedColumnName="id")
     * })
     */
    private $idgrupo;



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
     * Set confirmacao
     *
     * @param boolean $confirmacao
     *
     * @return Convitegrupo
     */
    public function setConfirmacao($confirmacao)
    {
        $this->confirmacao = $confirmacao;

        return $this;
    }

    /**
     * Get confirmacao
     *
     * @return boolean
     */
    public function getConfirmacao()
    {
        return $this->confirmacao;
    }

    /**
     * Set idagenda
     *
     * @param \AppBundle\Entity\Agenda $idagenda
     *
     * @return Convitegrupo
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

    /**
     * Set idgrupo
     *
     * @param \AppBundle\Entity\Grupo $idgrupo
     *
     * @return Convitegrupo
     */
    public function setIdgrupo(\AppBundle\Entity\Grupo $idgrupo = null)
    {
        $this->idgrupo = $idgrupo;

        return $this;
    }

    /**
     * Get idgrupo
     *
     * @return \AppBundle\Entity\Grupo
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }
}
