<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Categoriaevento
 *
 * @ORM\Table(name="CategoriaEvento")
 * @ORM\Entity
 */
class Categoriaevento
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
     * @ORM\Column(name="categoria", type="string", length=20, nullable=true)
     */
    private $categoria;


}

