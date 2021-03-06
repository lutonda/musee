<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Dureza
 *
 * @ORM\Table(name="Dureza", indexes={@ORM\Index(name="fk_amostra_6", columns={"idAmostra"})})
 * @ORM\Entity
 */
class Dureza
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
     * @var float
     *
     * @ORM\Column(name="de", type="float", precision=10, scale=0, nullable=true)
     */
    private $de;

    /**
     * @var float
     *
     * @ORM\Column(name="a", type="float", precision=10, scale=0, nullable=true)
     */
    private $a;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=100, nullable=true)
     */
    private $descricao;

    /**
     * @var \Amostra
     *
     * @ORM\ManyToOne(targetEntity="Amostra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAmostra", referencedColumnName="id")
     * })
     */
    private $idamostra;


}

