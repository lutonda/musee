<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Habito
 *
 * @ORM\Table(name="Habito")
 * @ORM\Entity
 */
class Habito
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
     * @ORM\Column(name="nome", type="string", length=20, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="designacao", type="string", length=20, nullable=true)
     */
    private $designacao;


}

