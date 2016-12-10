<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fraturaamostra
 *
 * @ORM\Table(name="FraturaAmostra", indexes={@ORM\Index(name="fk_amostra_9", columns={"idAmostra"}), @ORM\Index(name="fk_fratura_1", columns={"idFratura"})})
 * @ORM\Entity
 */
class Fraturaamostra
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
     * @var \Fratura
     *
     * @ORM\ManyToOne(targetEntity="Fratura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFratura", referencedColumnName="id")
     * })
     */
    private $idfratura;



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
     * @return Fraturaamostra
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
     * Set idfratura
     *
     * @param \AppBundle\Entity\Fratura $idfratura
     *
     * @return Fraturaamostra
     */
    public function setIdfratura(\AppBundle\Entity\Fratura $idfratura = null)
    {
        $this->idfratura = $idfratura;

        return $this;
    }

    /**
     * Get idfratura
     *
     * @return \AppBundle\Entity\Fratura
     */
    public function getIdfratura()
    {
        return $this->idfratura;
    }
}
