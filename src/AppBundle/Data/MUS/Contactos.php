<?php

namespace AppBundle\Data\MUS;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactos
 *
 * @ORM\Table(name="Contactos", indexes={@ORM\Index(name="fk_pessoa_1", columns={"idPessoa"}), @ORM\Index(name="fk_tipocontacto_1", columns={"idTiipoContacto"})})
 * @ORM\Entity
 */
class Contactos
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
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
     */
    private $descricao;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPessoa", referencedColumnName="id")
     * })
     */
    private $idpessoa;

    /**
     * @var \Tipocontacto
     *
     * @ORM\ManyToOne(targetEntity="Tipocontacto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTiipoContacto", referencedColumnName="id")
     * })
     */
    private $idtiipocontacto;

    /**
     *
     *@param int $id
     * @return Contactos
     */
    public function setId($id)
    {
        $this->id=$id;
        return  $this;
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
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Contactos
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
     * Set idpessoa
     *
     * @param \AppBundle\Entity\Pessoa $idpessoa
     *
     * @return Contactos
     */
    public function setIdpessoa($idpessoa = null)
    {
        $this->idpessoa = $idpessoa;

        return $this;
    }

    /**
     * Get idpessoa
     *
     * @return \AppBundle\Entity\Pessoa
     */
    public function getIdpessoa()
    {
        return $this->idpessoa;
    }

    /**
     * Set idtiipocontacto
     *
     * @param \AppBundle\Entity\Tipocontacto $idtiipocontacto
     *
     * @return Contactos
     */
    public function setIdtiipocontacto(Tipocontacto $idtiipocontacto = null)
    {
        $this->idtiipocontacto = $idtiipocontacto;

        return $this;
    }

    /**
     * Get idtiipocontacto
     *
     * @return \AppBundle\Entity\Tipocontacto
     */
    public function getIdtiipocontacto()
    {
        return $this->idtiipocontacto;
    }
}
