<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Troca
 *
 * @ORM\Table(name="Troca", indexes={@ORM\Index(name="fk_amostra_15", columns={"idAmostra"})})
 * @ORM\Entity
 */
class Troca
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
     * @var integer
     *
     * @ORM\Column(name="colaborador", type="integer", nullable=true)
     */
    private $colaborador;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=false)
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

