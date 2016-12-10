<?php



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


}

