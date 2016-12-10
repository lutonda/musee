<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Participante
 *
 * @ORM\Table(name="Participante", uniqueConstraints={@ORM\UniqueConstraint(name="idPessoa", columns={"idPessoa"})}, indexes={@ORM\Index(name="fk_pesso_5", columns={"idPessoa"})})
 * @ORM\Entity
 */
class Participante
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
     * @var string
     *
     * @ORM\Column(name="apelido", type="string", length=20, nullable=true)
     */
    private $apelido;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=true)
     */
    private $descricao;

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

