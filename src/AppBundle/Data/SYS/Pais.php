<?php

namespace AppBundle\Data\SYS;

use AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="Pais")
 * @ORM\Entity
 */
class Pais
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
     * @var integer
     *
     * @ORM\Column(name="continente", type="integer", nullable=true)
     */
    private $continente;



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
     * @return Pais
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
     * Set continente
     *
     * @param integer $continente
     *
     * @return Pais
     */
    public function setContinente($continente)
    {
        $this->continente = $continente;

        return $this;
    }

    /**
     * Get continente
     *
     * @return integer
     */
    public function getContinente()
    {
        return $this->continente;
    }
}
