<?php

namespace AppBundle\Data\SYS;
use AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="Municipio", indexes={@ORM\Index(name="fk_provincia_1", columns={"idProvincia"})})
 * @ORM\Entity
 */
class Municipio
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
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProvincia", referencedColumnName="id")
     * })
     */
    private $idprovincia;



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
     * @return Municipio
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Municipio
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Set idprovincia
     *
     * @param \AppBundle\Data\SYS\Provincia $idprovincia
     *
     * @return Municipio
     */
    public function setIdprovincia(Provincia $idprovincia = null)
    {
        $this->idprovincia = $idprovincia;

        return $this;
    }

    /**
     * Get idprovincia
     *
     * @return \AppBundle\Data\SYS\Provincia
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }

    public function __toString()
    {
        return (string) $this->getIdprovincia();
    }
}
