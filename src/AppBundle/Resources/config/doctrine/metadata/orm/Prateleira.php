<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Prateleira
 *
 * @ORM\Table(name="Prateleira")
 * @ORM\Entity
 */
class Prateleira
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="local", type="integer", nullable=true)
     */
    private $local;


}

