<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coramostra
 *
 * @ORM\Table(name="CorAmostra", indexes={@ORM\Index(name="fk_amostra_16", columns={"idAmostra"}), @ORM\Index(name="fk_cor_3", columns={"idCor"})})
 * @ORM\Entity
 */
class Coramostra
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
     * @var \Cor
     *
     * @ORM\ManyToOne(targetEntity="Cor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCor", referencedColumnName="id")
     * })
     */
    private $idcor;



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
     * @return Coramostra
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
     * Set idcor
     *
     * @param \AppBundle\Entity\Cor $idcor
     *
     * @return Coramostra
     */
    public function setIdcor(\AppBundle\Entity\Cor $idcor = null)
    {
        $this->idcor = $idcor;

        return $this;
    }

    /**
     * Get idcor
     *
     * @return \AppBundle\Entity\Cor
     */
    public function getIdcor()
    {
        return $this->idcor;
    }
}
