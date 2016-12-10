<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emprestimoamostra
 *
 * @ORM\Table(name="EmprestimoAmostra", indexes={@ORM\Index(name="fk_amostra_7", columns={"idAmostra"}), @ORM\Index(name="fk_emprestimo_1", columns={"idEmprestimo"})})
 * @ORM\Entity
 */
class Emprestimoamostra
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
     * @var \Emprestimo
     *
     * @ORM\ManyToOne(targetEntity="Emprestimo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEmprestimo", referencedColumnName="id")
     * })
     */
    private $idemprestimo;



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
     * @return Emprestimoamostra
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
     * Set idemprestimo
     *
     * @param \AppBundle\Entity\Emprestimo $idemprestimo
     *
     * @return Emprestimoamostra
     */
    public function setIdemprestimo(\AppBundle\Entity\Emprestimo $idemprestimo = null)
    {
        $this->idemprestimo = $idemprestimo;

        return $this;
    }

    /**
     * Get idemprestimo
     *
     * @return \AppBundle\Entity\Emprestimo
     */
    public function getIdemprestimo()
    {
        return $this->idemprestimo;
    }
}
