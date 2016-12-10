<?php



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


}

