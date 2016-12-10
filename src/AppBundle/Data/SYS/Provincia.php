<?php

namespace AppBundle\Data\SYS;

use AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="Provincia", indexes={@ORM\Index(name="fk_provincia_2", columns={"idPais"})})
 * @ORM\Entity
 */
class Provincia
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
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPais", referencedColumnName="id")
     * })
     */
    private $idpais;



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
     * @return Provincia
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
     * Set idpais
     *
     * @param \AppBundle\Entity\Pais $idpais
     *
     * @return Provincia
     */
    public function setIdpais(Pais $idpais = null)
    {
        $this->idpais = $idpais;

        return $this;
    }

    /**
     * Get idpais
     *
     * @return \AppBundle\Data\SYS\Pais
     */
    public function getIdpais()
    {
        return $this->idpais;
    }
}
