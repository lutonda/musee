<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Formasdoscristais
 *
 * @ORM\Table(name="FormasdosCristais")
 * @ORM\Entity
 */
class Formasdoscristais
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
     * @ORM\Column(name="descricao", type="string", length=20, nullable=true)
     */
    private $descricao;


}

