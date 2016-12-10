<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composicaoamostra
 *
 * @ORM\Table(name="ComposicaoAmostra", indexes={@ORM\Index(name="fk_amostrab_1", columns={"idAmostraB"}), @ORM\Index(name="fk_amostraa_1", columns={"idAmostraA"})})
 * @ORM\Entity
 */
class Composicaoamostra
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
     * @var \Amostra
     *
     * @ORM\ManyToOne(targetEntity="Amostra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAmostraA", referencedColumnName="id")
     * })
     */
    private $idamostraa;

    /**
     * @var \Amostra
     *
     * @ORM\ManyToOne(targetEntity="Amostra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAmostraB", referencedColumnName="id")
     * })
     */
    private $idamostrab;



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
     * Set idamostraa
     *
     * @param \AppBundle\Entity\Amostra $idamostraa
     *
     * @return Composicaoamostra
     */
    public function setIdamostraa(\AppBundle\Entity\Amostra $idamostraa = null)
    {
        $this->idamostraa = $idamostraa;

        return $this;
    }

    /**
     * Get idamostraa
     *
     * @return \AppBundle\Entity\Amostra
     */
    public function getIdamostraa()
    {
        return $this->idamostraa;
    }

    /**
     * Set idamostrab
     *
     * @param \AppBundle\Entity\Amostra $idamostrab
     *
     * @return Composicaoamostra
     */
    public function setIdamostrab(\AppBundle\Entity\Amostra $idamostrab = null)
    {
        $this->idamostrab = $idamostrab;

        return $this;
    }

    /**
     * Get idamostrab
     *
     * @return \AppBundle\Entity\Amostra
     */
    public function getIdamostrab()
    {
        return $this->idamostrab;
    }
}
