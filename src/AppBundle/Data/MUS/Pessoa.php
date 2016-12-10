<?php

namespace AppBundle\Data\MUS;


use Doctrine\ORM\Mapping as ORM;
use AppBundle\Data\SYS\Municipio;
/**
 * Pessoa
 *
 * @ORM\Table(name="Pessoa", indexes={@ORM\Index(name="fk_morada_1", columns={"morada"}), @ORM\Index(name="fk_naturalidade_1", columns={"naturalidade"}), @ORM\Index(name="fk_curso_1", columns={"curso"}), @ORM\Index(name="fk_curso_2", columns={"especialidade"})})
 * @ORM\Entity
 */
class Pessoa
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
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelAcademico", type="integer", nullable=true)
     */
    private $nivelacademico;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="genero", type="integer", nullable=true)
     */
    private $genero;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=true)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataNacimento", type="datetime", nullable=true)
     */
    private $datanacimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var \Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="curso", referencedColumnName="id")
     * })
     */
    private $curso;

    /**
     * @var \Curso
     *
     * @ORM\ManyToOne(targetEntity="Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="especialidade", referencedColumnName="id")
     * })
     */
    private $especialidade;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Data\SYS\Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="morada", referencedColumnName="id")
     * })
     */
    private $morada;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Data\SYS\Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="naturalidade", referencedColumnName="id")
     * })
     */
    private $naturalidade;


    private $contactos;

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
     * Set id
     *
     * @param integer $id
     *
     * @return Pessoa
     */
    public function setId($id)
    {
        $this->id=$id;

        return $this;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Pessoa
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
     * Set numero
     *
     * @param string $numero
     *
     * @return Pessoa
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set nivelacademico
     *
     * @param integer $nivelacademico
     *
     * @return Pessoa
     */
    public function setNivelacademico($nivelacademico)
    {
        $this->nivelacademico = $nivelacademico;

        return $this;
    }

    /**
     * Get nivelacademico
     *
     * @return integer
     */
    public function getNivelacademico()
    {
        return $this->nivelacademico;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Pessoa
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
     * Set genero
     *
     * @param integer $genero
     *
     * @return Pessoa
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return integer
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Pessoa
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set datanacimento
     *
     * @param \DateTime $datanacimento
     *
     * @return Pessoa
     */
    public function setDatanacimento($datanacimento)
    {
        $this->datanacimento = $datanacimento;

        return $this;
    }

    /**
     * Get datanacimento
     *
     * @return \DateTime
     */
    public function getDatanacimento()
    {
        return $this->datanacimento;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return Pessoa
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
     * Set curso
     *
     * @param \AppBundle\Entity\Curso $curso
     *
     * @return Pessoa
     */
    public function setCurso(Curso $curso = null)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return \AppBundle\Entity\Curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set especialidade
     *
     * @param \AppBundle\Entity\Curso $especialidade
     *
     * @return Pessoa
     */
    public function setEspecialidade(Curso $especialidade = null)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    /**
     * Get especialidade
     *
     * @return \AppBundle\Entity\Curso
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set morada
     *
     * @param \AppBundle\Data\SYS\Municipio $morada
     *
     * @return Pessoa
     */
    public function setMorada(Municipio $morada = null)
    {
        $this->morada = $morada;

        return $this;
    }

    /**
     * Get morada
     *
     * @return \AppBundle\Data\SYS\Municipio
     */
    public function getMorada()
    {
        return $this->morada;
    }

    /**
     * Set naturalidade
     *
     * @param \AppBundle\Data\SYS\Municipio $naturalidade
     *
     * @return Pessoa
     */
    public function setNaturalidade(Municipio $naturalidade = null)
    {
        $this->naturalidade = $naturalidade;

        return $this;
    }

    /**
     * Get naturalidade
     *
     * @return \AppBundle\Data\SYS\Municipio
     */
    public function getNaturalidade()
    {
        return $this->naturalidade;
    }
    /**
     * Set naturalidade
     *
     * @param array $contactos
     *
     * @return Pessoa
     */
    public function setContactos(array $contactos= null)
    {
        $this->contactos= $contactos;

        return $this;
    }

    /**
     *
     * @return array
     */
    public function getContactos()
    {
        return $this->contactos;
    }
}
