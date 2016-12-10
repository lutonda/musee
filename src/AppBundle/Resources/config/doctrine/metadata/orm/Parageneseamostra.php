<?php



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


}

