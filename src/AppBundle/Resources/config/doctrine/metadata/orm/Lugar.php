<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Lugar
 *
 * @ORM\Table(name="Lugar")
 * @ORM\Entity
 */
class Lugar
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
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=20, nullable=true)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="lotacao", type="integer", nullable=true)
     */
    private $lotacao;


}

