<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Colaborador
 *
 * @ORM\Table(name="Colaborador")
 * @ORM\Entity
 */
class Colaborador
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
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=10, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoria", type="integer", nullable=true)
     */
    private $categoria;


}

