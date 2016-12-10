<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Sistemacristalino
 *
 * @ORM\Table(name="SistemaCristalino")
 * @ORM\Entity
 */
class Sistemacristalino
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


}

