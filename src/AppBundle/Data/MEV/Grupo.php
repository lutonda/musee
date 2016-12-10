<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="Grupo", indexes={@ORM\Index(name="fk_pessoa_4", columns={"responsavel"}), @ORM\Index(name="fk_local_2", columns={"local"})})
 * @ORM\Entity
 */
class Grupo
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
     * @ORM\Column(name="nome", type="string", length=20, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local", referencedColumnName="id")
     * })
     */
    private $local;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsavel", referencedColumnName="id")
     * })
     */
    private $responsavel;



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
     * @return Grupo
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
     * Set tipo
     *
     * @param integer $tipo
     *
     * @return Grupo
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
     * Set local
     *
     * @param \AppBundle\Entity\Municipio $local
     *
     * @return Grupo
     */
    public function setLocal(\AppBundle\Entity\Municipio $local = null)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return \AppBundle\Entity\Municipio
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set responsavel
     *
     * @param \AppBundle\Entity\Pessoa $responsavel
     *
     * @return Grupo
     */
    public function setResponsavel(\AppBundle\Entity\Pessoa $responsavel = null)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get responsavel
     *
     * @return \AppBundle\Entity\Pessoa
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }
}
