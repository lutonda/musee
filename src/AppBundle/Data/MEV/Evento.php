<?php

namespace AppBundle\Entity;

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



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Evento
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Evento
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set categoria
     *
     * @param \AppBundle\Entity\Categoriaevento $categoria
     *
     * @return Evento
     */
    public function setCategoria(\AppBundle\Entity\Categoriaevento $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \AppBundle\Entity\Categoriaevento
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set tipo
     *
     * @param \AppBundle\Entity\Tipoevento $tipo
     *
     * @return Evento
     */
    public function setTipo(\AppBundle\Entity\Tipoevento $tipo = null)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return \AppBundle\Entity\Tipoevento
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
