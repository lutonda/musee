<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Convitepessoa
 *
 * @ORM\Table(name="ConvitePessoa", indexes={@ORM\Index(name="fk_convitepessoa_1", columns={"idAgenda"}), @ORM\Index(name="fk_pessoa_2", columns={"idPessoa"})})
 * @ORM\Entity
 */
class Convitepessoa
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
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPessoa", referencedColumnName="id")
     * })
     */
    private $idpessoa;



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
     * @return Convitepessoa
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
     * @return Convitepessoa
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
     * Set idpessoa
     *
     * @param \AppBundle\Entity\Pessoa $idpessoa
     *
     * @return Convitepessoa
     */
    public function setIdpessoa(\AppBundle\Entity\Pessoa $idpessoa = null)
    {
        $this->idpessoa = $idpessoa;

        return $this;
    }

    /**
     * Get idpessoa
     *
     * @return \AppBundle\Entity\Pessoa
     */
    public function getIdpessoa()
    {
        return $this->idpessoa;
    }
}
