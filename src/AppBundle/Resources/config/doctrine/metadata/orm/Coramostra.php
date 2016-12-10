<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Coramostra
 *
 * @ORM\Table(name="CorAmostra", indexes={@ORM\Index(name="fk_amostra_16", columns={"idAmostra"}), @ORM\Index(name="fk_cor_3", columns={"idCor"})})
 * @ORM\Entity
 */
class Coramostra
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
     * @var \Cor
     *
     * @ORM\ManyToOne(targetEntity="Cor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCor", referencedColumnName="id")
     * })
     */
    private $idcor;


}

