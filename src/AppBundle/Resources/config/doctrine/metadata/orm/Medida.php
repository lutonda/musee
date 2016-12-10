<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Medida
 *
 * @ORM\Table(name="Medida", indexes={@ORM\Index(name="fk_amostra_13", columns={"idAmostra"})})
 * @ORM\Entity
 */
class Medida
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
     * @ORM\Column(name="espessura", type="float", precision=10, scale=0, nullable=true)
     */
    private $espessura;

    /**
     * @var float
     *
     * @ORM\Column(name="altura", type="float", precision=10, scale=0, nullable=true)
     */
    private $altura;

    /**
     * @var float
     *
     * @ORM\Column(name="comprimento", type="float", precision=10, scale=0, nullable=true)
     */
    private $comprimento;

    /**
     * @var float
     *
     * @ORM\Column(name="largura", type="float", precision=10, scale=0, nullable=true)
     */
    private $largura;

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

