<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dureza
 *
 * @ORM\Table(name="Dureza", indexes={@ORM\Index(name="fk_amostra_6", columns={"idAmostra"})})
 * @ORM\Entity
 */
class Dureza
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
     * @var float
     *
     * @ORM\Column(name="de", type="float", precision=10, scale=0, nullable=true)
     */
    private $de;

    /**
     * @var float
     *
     * @ORM\Column(name="a", type="float", precision=10, scale=0, nullable=true)
     */
    private $a;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=true)
     */
    private $descricao;

    /**
     * @var \Amostra
     *
     * @ORM\ManyToOne(targetEntity="Amostra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAmostra", referencedColumnName="id")
     * })
     */
    private $idamostra;



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
     * Set de
     *
     * @param float $de
     *
     * @return Dureza
     */
    public function setDe($de)
    {
        $this->de = $de;

        return $this;
    }

    /**
     * Get de
     *
     * @return float
     */
    public function getDe()
    {
        return $this->de;
    }

    /**
     * Set a
     *
     * @param float $a
     *
     * @return Dureza
     */
    public function setA($a)
    {
        $this->a = $a;

        return $this;
    }

    /**
     * Get a
     *
     * @return float
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Dureza
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
     * Set idamostra
     *
     * @param \AppBundle\Entity\Amostra $idamostra
     *
     * @return Dureza
     */
    public function setIdamostra(\AppBundle\Entity\Amostra $idamostra = null)
    {
        $this->idamostra = $idamostra;

        return $this;
    }

    /**
     * Get idamostra
     *
     * @return \AppBundle\Entity\Amostra
     */
    public function getIdamostra()
    {
        return $this->idamostra;
    }
}
