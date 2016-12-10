<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localizacaoamostra
 *
 * @ORM\Table(name="LocalizacaoAmostra", indexes={@ORM\Index(name="fk_localizacao_0", columns={"idLocal"}), @ORM\Index(name="fk_amostra_12", columns={"idAmostra"})})
 * @ORM\Entity
 */
class Localizacaoamostra
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
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocal", referencedColumnName="id")
     * })
     */
    private $idlocal;



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
     * @return Localizacaoamostra
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
     * Set idlocal
     *
     * @param \AppBundle\Entity\Municipio $idlocal
     *
     * @return Localizacaoamostra
     */
    public function setIdlocal(\AppBundle\Entity\Municipio $idlocal = null)
    {
        $this->idlocal = $idlocal;

        return $this;
    }

    /**
     * Get idlocal
     *
     * @return \AppBundle\Entity\Municipio
     */
    public function getIdlocal()
    {
        return $this->idlocal;
    }
}
