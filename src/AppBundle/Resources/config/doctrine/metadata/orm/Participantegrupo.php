<?php



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


}

