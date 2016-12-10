<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formadoscristaisamostra
 *
 * @ORM\Table(name="FormadosCristaisAmostra", indexes={@ORM\Index(name="fk_amostra_8", columns={"idAmostra"}), @ORM\Index(name="fk_formadoscristai_7", columns={"idFormadosCristais"})})
 * @ORM\Entity
 */
class Formadoscristaisamostra
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
     * @var \Formasdoscristais
     *
     * @ORM\ManyToOne(targetEntity="Formasdoscristais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormadosCristais", referencedColumnName="id")
     * })
     */
    private $idformadoscristais;



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
     * @return Formadoscristaisamostra
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
     * Set idformadoscristais
     *
     * @param \AppBundle\Entity\Formasdoscristais $idformadoscristais
     *
     * @return Formadoscristaisamostra
     */
    public function setIdformadoscristais(\AppBundle\Entity\Formasdoscristais $idformadoscristais = null)
    {
        $this->idformadoscristais = $idformadoscristais;

        return $this;
    }

    /**
     * Get idformadoscristais
     *
     * @return \AppBundle\Entity\Formasdoscristais
     */
    public function getIdformadoscristais()
    {
        return $this->idformadoscristais;
    }
}
