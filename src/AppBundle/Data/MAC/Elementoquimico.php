<?php

namespace AppBundle\Entity;

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
     * Set elemento
     *
     * @param string $elemento
     *
     * @return Elementoquimico
     */
    public function setElemento($elemento)
    {
        $this->elemento = $elemento;

        return $this;
    }

    /**
     * Get elemento
     *
     * @return string
     */
    public function getElemento()
    {
        return $this->elemento;
    }

    /**
     * Set simbolo
     *
     * @param string $simbolo
     *
     * @return Elementoquimico
     */
    public function setSimbolo($simbolo)
    {
        $this->simbolo = $simbolo;

        return $this;
    }

    /**
     * Get simbolo
     *
     * @return string
     */
    public function getSimbolo()
    {
        return $this->simbolo;
    }
}
