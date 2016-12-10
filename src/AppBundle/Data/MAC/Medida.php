<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medida
 *
 * @ORM\Table(name="Medida", indexes={@ORM\Index(name="fk_amostra_13", columns={"idAmostra"})})
 * @ORM\Entity
 */
class Medida
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
     * @ORM\Column(name="espessura", type="float", precision=10, scale=0, nullable=true)
     */
    private $espessura;

    /**
     * @var float
     *
     * @ORM\Column(name="altura", type="float", precision=10, scale=0, nullable=true)
     */
    private $altura;

    /**
     * @var float
     *
     * @ORM\Column(name="comprimento", type="float", precision=10, scale=0, nullable=true)
     */
    private $comprimento;

    /**
     * @var float
     *
     * @ORM\Column(name="largura", type="float", precision=10, scale=0, nullable=true)
     */
    private $largura;

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
     * Set espessura
     *
     * @param float $espessura
     *
     * @return Medida
     */
    public function setEspessura($espessura)
    {
        $this->espessura = $espessura;

        return $this;
    }

    /**
     * Get espessura
     *
     * @return float
     */
    public function getEspessura()
    {
        return $this->espessura;
    }

    /**
     * Set altura
     *
     * @param float $altura
     *
     * @return Medida
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return float
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set comprimento
     *
     * @param float $comprimento
     *
     * @return Medida
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get comprimento
     *
     * @return float
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set largura
     *
     * @param float $largura
     *
     * @return Medida
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get largura
     *
     * @return float
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set idamostra
     *
     * @param \AppBundle\Entity\Amostra $idamostra
     *
     * @return Medida
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
