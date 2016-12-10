<?php

namespace AppBundle\Entity;

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
     * Set apelido
     *
     * @param string $apelido
     *
     * @return Participante
     */
    public function setApelido($apelido)
    {
        $this->apelido = $apelido;

        return $this;
    }

    /**
     * Get apelido
     *
     * @return string
     */
    public function getApelido()
    {
        return $this->apelido;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Participante
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set idpessoa
     *
     * @param \AppBundle\Entity\Pessoa $idpessoa
     *
     * @return Participante
     */
    public function setIdpessoa(\AppBundle\Entity\Pessoa $idpessoa = null)
    {
        $this->idpessoa = $idpessoa;

        return $this;
    }

    /**
     * Get idpessoa
     *
     * @return \AppBundle\Entity\Pessoa
     */
    public function getIdpessoa()
    {
        return $this->idpessoa;
    }
}
