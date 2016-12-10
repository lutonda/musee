<?php



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


}

