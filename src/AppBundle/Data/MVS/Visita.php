<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visita
 *
 * @ORM\Table(name="Visita", indexes={@ORM\Index(name="fk_pessoa_16", columns={"idParticipante"})})
 * @ORM\Entity
 */
class Visita
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
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="duracao", type="integer", nullable=true)
     */
    private $duracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var \Participante
     *
     * @ORM\ManyToOne(targetEntity="Participante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idParticipante", referencedColumnName="idPessoa")
     * })
     */
    private $idparticipante;



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
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Visita
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set duracao
     *
     * @param integer $duracao
     *
     * @return Visita
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

        return $this;
    }

    /**
     * Get duracao
     *
     * @return integer
     */
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Visita
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
     * Set idparticipante
     *
     * @param \AppBundle\Entity\Participante $idparticipante
     *
     * @return Visita
     */
    public function setIdparticipante(\AppBundle\Entity\Participante $idparticipante = null)
    {
        $this->idparticipante = $idparticipante;

        return $this;
    }

    /**
     * Get idparticipante
     *
     * @return \AppBundle\Entity\Participante
     */
    public function getIdparticipante()
    {
        return $this->idparticipante;
    }
}
