<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geneseamostra
 *
 * @ORM\Table(name="GeneseAmostra", indexes={@ORM\Index(name="fk_amostra_10", columns={"idAmostra"}), @ORM\Index(name="fk_genese_1", columns={"idGenese"})})
 * @ORM\Entity
 */
class Geneseamostra
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
     *   @ORM\JoinColumn(name="idAmostra", referencedColumnName="id")
     * })
     */
    private $idamostra;

    /**
     * @var \Genese
     *
     * @ORM\ManyToOne(targetEntity="Genese")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGenese", referencedColumnName="id")
     * })
     */
    private $idgenese;



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
     * Set idamostra
     *
     * @param \AppBundle\Entity\Amostra $idamostra
     *
     * @return Geneseamostra
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

    /**
     * Set idgenese
     *
     * @param \AppBundle\Entity\Genese $idgenese
     *
     * @return Geneseamostra
     */
    public function setIdgenese(\AppBundle\Entity\Genese $idgenese = null)
    {
        $this->idgenese = $idgenese;

        return $this;
    }

    /**
     * Get idgenese
     *
     * @return \AppBundle\Entity\Genese
     */
    public function getIdgenese()
    {
        return $this->idgenese;
    }
}
