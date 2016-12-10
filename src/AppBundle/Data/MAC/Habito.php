<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Habito
 *
 * @ORM\Table(name="Habito")
 * @ORM\Entity
 */
class Habito
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
     * @ORM\Column(name="designacao", type="string", length=20, nullable=true)
     */
    private $designacao;



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
     * @return Habito
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

    /**
     * Set designacao
     *
     * @param string $designacao
     *
     * @return Habito
     */
    public function setDesignacao($designacao)
    {
        $this->designacao = $designacao;

        return $this;
    }

    /**
     * Get designacao
     *
     * @return string
     */
    public function getDesignacao()
    {
        return $this->designacao;
    }
}
