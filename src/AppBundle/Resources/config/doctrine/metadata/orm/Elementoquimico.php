<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Elementoquimico
 *
 * @ORM\Table(name="ElementoQuimico")
 * @ORM\Entity
 */
class Elementoquimico
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
     * @ORM\Column(name="elemento", type="string", length=20, nullable=true)
     */
    private $elemento;

    /**
     * @var string
     *
     * @ORM\Column(name="simbolo", type="string", length=10, nullable=true)
     */
    private $simbolo;


}

