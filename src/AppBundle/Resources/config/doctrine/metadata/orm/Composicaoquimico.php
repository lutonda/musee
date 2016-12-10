<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Composicaoquimico
 *
 * @ORM\Table(name="ComposicaoQuimico", indexes={@ORM\Index(name="fk_amostra_2", columns={"idAmostra"}), @ORM\Index(name="fk_amostra_3", columns={"idElemento"})})
 * @ORM\Entity
 */
class Composicaoquimico
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
     * @var \Elementoquimico
     *
     * @ORM\ManyToOne(targetEntity="Elementoquimico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idElemento", referencedColumnName="id")
     * })
     */
    private $idelemento;


}

