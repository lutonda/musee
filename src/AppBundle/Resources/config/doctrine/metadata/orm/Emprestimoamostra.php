<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Emprestimoamostra
 *
 * @ORM\Table(name="EmprestimoAmostra", indexes={@ORM\Index(name="fk_amostra_7", columns={"idAmostra"}), @ORM\Index(name="fk_emprestimo_1", columns={"idEmprestimo"})})
 * @ORM\Entity
 */
class Emprestimoamostra
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
     * @var \Emprestimo
     *
     * @ORM\ManyToOne(targetEntity="Emprestimo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEmprestimo", referencedColumnName="id")
     * })
     */
    private $idemprestimo;


}

