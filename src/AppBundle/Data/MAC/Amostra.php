<?php

namespace AppBundle\Entity;

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
     * Set nome
     *
     * @param string $nome
     *
     * @return Amostra
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set risca
     *
     * @param integer $risca
     *
     * @return Amostra
     */
    public function setRisca($risca)
    {
        $this->risca = $risca;

        return $this;
    }

    /**
     * Get risca
     *
     * @return integer
     */
    public function getRisca()
    {
        return $this->risca;
    }

    /**
     * Set brilho
     *
     * @param integer $brilho
     *
     * @return Amostra
     */
    public function setBrilho($brilho)
    {
        $this->brilho = $brilho;

        return $this;
    }

    /**
     * Get brilho
     *
     * @return integer
     */
    public function getBrilho()
    {
        return $this->brilho;
    }

    /**
     * Set dureza
     *
     * @param integer $dureza
     *
     * @return Amostra
     */
    public function setDureza($dureza)
    {
        $this->dureza = $dureza;

        return $this;
    }

    /**
     * Get dureza
     *
     * @return integer
     */
    public function getDureza()
    {
        return $this->dureza;
    }

    /**
     * Set peso
     *
     * @param integer $peso
     *
     * @return Amostra
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return integer
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set datacadastro
     *
     * @param \DateTime $datacadastro
     *
     * @return Amostra
     */
    public function setDatacadastro($datacadastro)
    {
        $this->datacadastro = $datacadastro;

        return $this;
    }

    /**
     * Get datacadastro
     *
     * @return \DateTime
     */
    public function getDatacadastro()
    {
        return $this->datacadastro;
    }

    /**
     * Set caraceristica
     *
     * @param string $caraceristica
     *
     * @return Amostra
     */
    public function setCaraceristica($caraceristica)
    {
        $this->caraceristica = $caraceristica;

        return $this;
    }

    /**
     * Get caraceristica
     *
     * @return string
     */
    public function getCaraceristica()
    {
        return $this->caraceristica;
    }

    /**
     * Set aplicacao
     *
     * @param string $aplicacao
     *
     * @return Amostra
     */
    public function setAplicacao($aplicacao)
    {
        $this->aplicacao = $aplicacao;

        return $this;
    }

    /**
     * Get aplicacao
     *
     * @return string
     */
    public function getAplicacao()
    {
        return $this->aplicacao;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Amostra
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
     * Set categoria
     *
     * @param \AppBundle\Entity\Categoria $categoria
     *
     * @return Amostra
     */
    public function setCategoria(\AppBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \AppBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set conservacao
     *
     * @param \AppBundle\Entity\Conservavao $conservacao
     *
     * @return Amostra
     */
    public function setConservacao(\AppBundle\Entity\Conservavao $conservacao = null)
    {
        $this->conservacao = $conservacao;

        return $this;
    }

    /**
     * Get conservacao
     *
     * @return \AppBundle\Entity\Conservavao
     */
    public function getConservacao()
    {
        return $this->conservacao;
    }

    /**
     * Set ocorencia
     *
     * @param \AppBundle\Entity\Ocorencia $ocorencia
     *
     * @return Amostra
     */
    public function setOcorencia(\AppBundle\Entity\Ocorencia $ocorencia = null)
    {
        $this->ocorencia = $ocorencia;

        return $this;
    }

    /**
     * Get ocorencia
     *
     * @return \AppBundle\Entity\Ocorencia
     */
    public function getOcorencia()
    {
        return $this->ocorencia;
    }

    /**
     * Set prateleira
     *
     * @param \AppBundle\Entity\Prateleira $prateleira
     *
     * @return Amostra
     */
    public function setPrateleira(\AppBundle\Entity\Prateleira $prateleira = null)
    {
        $this->prateleira = $prateleira;

        return $this;
    }

    /**
     * Get prateleira
     *
     * @return \AppBundle\Entity\Prateleira
     */
    public function getPrateleira()
    {
        return $this->prateleira;
    }

    /**
     * Set sistemacristalina
     *
     * @param \AppBundle\Entity\Sistemacristalino $sistemacristalina
     *
     * @return Amostra
     */
    public function setSistemacristalina(\AppBundle\Entity\Sistemacristalino $sistemacristalina = null)
    {
        $this->sistemacristalina = $sistemacristalina;

        return $this;
    }

    /**
     * Get sistemacristalina
     *
     * @return \AppBundle\Entity\Sistemacristalino
     */
    public function getSistemacristalina()
    {
        return $this->sistemacristalina;
    }

    /**
     * Set transparenica
     *
     * @param \AppBundle\Entity\Transparencia $transparenica
     *
     * @return Amostra
     */
    public function setTransparenica(\AppBundle\Entity\Transparencia $transparenica = null)
    {
        $this->transparenica = $transparenica;

        return $this;
    }

    /**
     * Get transparenica
     *
     * @return \AppBundle\Entity\Transparencia
     */
    public function getTransparenica()
    {
        return $this->transparenica;
    }
}
