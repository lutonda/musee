<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Amostra
 *
 * @ORM\Table(name="Amostra", indexes={@ORM\Index(name="fk_categoria_1", columns={"categoria"}), @ORM\Index(name="fk_conservacao_1", columns={"conservacao"}), @ORM\Index(name="fk_prateleira_1", columns={"prateleira"}), @ORM\Index(name="fk_sistemacristalino_1", columns={"sistemaCristalina"}), @ORM\Index(name="fk_ocorencia_1", columns={"ocorencia"}), @ORM\Index(name="fk_trasparencia_1", columns={"transparenica"})})
 * @ORM\Entity
 */
class Amostra
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
     * @ORM\Column(name="nome", type="string", length=10, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="risca", type="integer", nullable=true)
     */
    private $risca;

    /**
     * @var integer
     *
     * @ORM\Column(name="brilho", type="integer", nullable=true)
     */
    private $brilho;

    /**
     * @var integer
     *
     * @ORM\Column(name="dureza", type="integer", nullable=true)
     */
    private $dureza;

    /**
     * @var integer
     *
     * @ORM\Column(name="peso", type="integer", nullable=true)
     */
    private $peso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCadastro", type="datetime", nullable=false)
     */
    private $datacadastro = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="caraceristica", type="string", length=100, nullable=true)
     */
    private $caraceristica;

    /**
     * @var string
     *
     * @ORM\Column(name="aplicacao", type="string", length=100, nullable=true)
     */
    private $aplicacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria", referencedColumnName="id")
     * })
     */
    private $categoria;

    /**
     * @var \Conservavao
     *
     * @ORM\ManyToOne(targetEntity="Conservavao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="conservacao", referencedColumnName="id")
     * })
     */
    private $conservacao;

    /**
     * @var \Ocorencia
     *
     * @ORM\ManyToOne(targetEntity="Ocorencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ocorencia", referencedColumnName="id")
     * })
     */
    private $ocorencia;

    /**
     * @var \Prateleira
     *
     * @ORM\ManyToOne(targetEntity="Prateleira")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="prateleira", referencedColumnName="id")
     * })
     */
    private $prateleira;

    /**
     * @var \Sistemacristalino
     *
     * @ORM\ManyToOne(targetEntity="Sistemacristalino")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sistemaCristalina", referencedColumnName="id")
     * })
     */
    private $sistemacristalina;

    /**
     * @var \Transparencia
     *
     * @ORM\ManyToOne(targetEntity="Transparencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="transparenica", referencedColumnName="id")
     * })
     */
    private $transparenica;


}

