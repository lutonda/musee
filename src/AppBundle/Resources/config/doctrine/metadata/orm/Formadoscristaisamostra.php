<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Formadoscristaisamostra
 *
 * @ORM\Table(name="FormadosCristaisAmostra", indexes={@ORM\Index(name="fk_amostra_8", columns={"idAmostra"}), @ORM\Index(name="fk_formadoscristai_7", columns={"idFormadosCristais"})})
 * @ORM\Entity
 */
class Formadoscristaisamostra
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
     * @var \Formasdoscristais
     *
     * @ORM\ManyToOne(targetEntity="Formasdoscristais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormadosCristais", referencedColumnName="id")
     * })
     */
    private $idformadoscristais;


}

