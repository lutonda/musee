<?php



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


}

