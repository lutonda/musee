<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="Evento", indexes={@ORM\Index(name="fk_categoria_2", columns={"categoria"}), @ORM\Index(name="fk_tipo_2", columns={"tipo"})})
 * @ORM\Entity
 */
class Evento
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
     * @ORM\Column(name="titulo", type="string", length=20, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=20, nullable=true)
     */
    private $descricao;

    /**
     * @var \Categoriaevento
     *
     * @ORM\ManyToOne(targetEntity="Categoriaevento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria", referencedColumnName="id")
     * })
     */
    private $categoria;

    /**
     * @var \Tipoevento
     *
     * @ORM\ManyToOne(targetEntity="Tipoevento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo", referencedColumnName="id")
     * })
     */
    private $tipo;


}

