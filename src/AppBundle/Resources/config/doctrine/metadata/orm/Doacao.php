<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Doacao
 *
 * @ORM\Table(name="Doacao", indexes={@ORM\Index(name="fk_doacao_1", columns={"colaborador"})})
 * @ORM\Entity
 */
class Doacao
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
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var \Colaborador
     *
     * @ORM\ManyToOne(targetEntity="Colaborador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="colaborador", referencedColumnName="id")
     * })
     */
    private $colaborador;


}

