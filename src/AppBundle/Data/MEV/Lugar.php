<?php

namespace AppBundle\Entity;

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
     * Set numero
     *
     * @param integer $numero
     *
     * @return Lugar
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Lugar
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
     * Set lotacao
     *
     * @param integer $lotacao
     *
     * @return Lugar
     */
    public function setLotacao($lotacao)
    {
        $this->lotacao = $lotacao;

        return $this;
    }

    /**
     * Get lotacao
     *
     * @return integer
     */
    public function getLotacao()
    {
        return $this->lotacao;
    }
}
