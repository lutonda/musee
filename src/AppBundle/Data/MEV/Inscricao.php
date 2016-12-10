<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscricao
 *
 * @ORM\Table(name="Inscricao", indexes={@ORM\Index(name="fk_agenda_5", columns={"idAgenda"}), @ORM\Index(name="fk_participante_0", columns={"idParticipante"})})
 * @ORM\Entity
 */
class Inscricao
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
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Inscricao
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
     * Set idagenda
     *
     * @param \AppBundle\Entity\Agenda $idagenda
     *
     * @return Inscricao
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
     * Set idparticipante
     *
     * @param \AppBundle\Entity\Participante $idparticipante
     *
     * @return Inscricao
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
