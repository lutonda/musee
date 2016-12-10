<?php

namespace AppBundle\Data\MUS;
use AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tipocontacto
 *
 * @ORM\Table(name="TipoContacto")
 * @ORM\Entity
 */
class Tipocontacto
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
     *
     *
     * @return Tipocontacto
     */
    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }

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
     * Set nome
     *
     * @param string $nome
     *
     * @return Tipocontacto
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }
}
