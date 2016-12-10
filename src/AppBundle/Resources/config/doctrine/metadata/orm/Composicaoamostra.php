<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Composicaoamostra
 *
 * @ORM\Table(name="ComposicaoAmostra", indexes={@ORM\Index(name="fk_amostrab_1", columns={"idAmostraB"}), @ORM\Index(name="fk_amostraa_1", columns={"idAmostraA"})})
 * @ORM\Entity
 */
class Composicaoamostra
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
     *   @ORM\JoinColumn(name="idAmostraA", referencedColumnName="id")
     * })
     */
    private $idamostraa;

    /**
     * @var \Amostra
     *
     * @ORM\ManyToOne(targetEntity="Amostra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAmostraB", referencedColumnName="id")
     * })
     */
    private $idamostrab;


}

