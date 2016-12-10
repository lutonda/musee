<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parageneseamostra
 *
 * @ORM\Table(name="ParaGeneseAmostra", indexes={@ORM\Index(name="fk_amostra_14", columns={"idAmostra"}), @ORM\Index(name="fk_paragenese_14", columns={"idParaGenese"})})
 * @ORM\Entity
 */
class Parageneseamostra
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
     * @var \Paragenese
     *
     * @ORM\ManyToOne(targetEntity="Paragenese")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idParaGenese", referencedColumnName="id")
     * })
     */
    private $idparagenese;



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
     * @return Parageneseamostra
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
     * Set idparagenese
     *
     * @param \AppBundle\Entity\Paragenese $idparagenese
     *
     * @return Parageneseamostra
     */
    public function setIdparagenese(\AppBundle\Entity\Paragenese $idparagenese = null)
    {
        $this->idparagenese = $idparagenese;

        return $this;
    }

    /**
     * Get idparagenese
     *
     * @return \AppBundle\Entity\Paragenese
     */
    public function getIdparagenese()
    {
        return $this->idparagenese;
    }
}
