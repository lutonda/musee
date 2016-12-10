<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participantegrupo
 *
 * @ORM\Table(name="ParticipanteGrupo", indexes={@ORM\Index(name="fk_participante_2", columns={"idParticipante"}), @ORM\Index(name="fk_grupo_2", columns={"idGrupo"})})
 * @ORM\Entity
 */
class Participantegrupo
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
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGrupo", referencedColumnName="id")
     * })
     */
    private $idgrupo;

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
     * Set idgrupo
     *
     * @param \AppBundle\Entity\Grupo $idgrupo
     *
     * @return Participantegrupo
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

    /**
     * Set idparticipante
     *
     * @param \AppBundle\Entity\Participante $idparticipante
     *
     * @return Participantegrupo
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
