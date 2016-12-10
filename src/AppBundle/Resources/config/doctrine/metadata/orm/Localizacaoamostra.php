<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Localizacaoamostra
 *
 * @ORM\Table(name="LocalizacaoAmostra", indexes={@ORM\Index(name="fk_localizacao_0", columns={"idLocal"}), @ORM\Index(name="fk_amostra_12", columns={"idAmostra"})})
 * @ORM\Entity
 */
class Localizacaoamostra
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
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idLocal", referencedColumnName="id")
     * })
     */
    private $idlocal;


}

