<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habitoamostra
 *
 * @ORM\Table(name="HabitoAmostra", indexes={@ORM\Index(name="fk_amostra_11", columns={"idAmostra"}), @ORM\Index(name="fk_habito_1", columns={"idHabito"})})
 * @ORM\Entity
 */
class Habitoamostra
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
     * @var \Habito
     *
     * @ORM\ManyToOne(targetEntity="Habito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idHabito", referencedColumnName="id")
     * })
     */
    private $idhabito;



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
     * @return Habitoamostra
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
     * Set idhabito
     *
     * @param \AppBundle\Entity\Habito $idhabito
     *
     * @return Habitoamostra
     */
    public function setIdhabito(\AppBundle\Entity\Habito $idhabito = null)
    {
        $this->idhabito = $idhabito;

        return $this;
    }

    /**
     * Get idhabito
     *
     * @return \AppBundle\Entity\Habito
     */
    public function getIdhabito()
    {
        return $this->idhabito;
    }
}
