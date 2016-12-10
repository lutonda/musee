<?php



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


}

