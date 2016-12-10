<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoevento
 *
 * @ORM\Table(name="TipoEvento")
 * @ORM\Entity
 */
class Tipoevento
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
     * @ORM\Column(name="tipo", type="string", length=20, nullable=true)
     */
    private $tipo;


}

