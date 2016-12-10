<?php



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


}

