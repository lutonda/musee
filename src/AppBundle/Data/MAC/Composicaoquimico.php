<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composicaoquimico
 *
 * @ORM\Table(name="ComposicaoQuimico", indexes={@ORM\Index(name="fk_amostra_2", columns={"idAmostra"}), @ORM\Index(name="fk_amostra_3", columns={"idElemento"})})
 * @ORM\Entity
 */
class Composicaoquimico
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
     * @var \Elementoquimico
     *
     * @ORM\ManyToOne(targetEntity="Elementoquimico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idElemento", referencedColumnName="id")
     * })
     */
    private $idelemento;



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
     * @return Composicaoquimico
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
     * Set idelemento
     *
     * @param \AppBundle\Entity\Elementoquimico $idelemento
     *
     * @return Composicaoquimico
     */
    public function setIdelemento(\AppBundle\Entity\Elementoquimico $idelemento = null)
    {
        $this->idelemento = $idelemento;

        return $this;
    }

    /**
     * Get idelemento
     *
     * @return \AppBundle\Entity\Elementoquimico
     */
    public function getIdelemento()
    {
        return $this->idelemento;
    }
}
