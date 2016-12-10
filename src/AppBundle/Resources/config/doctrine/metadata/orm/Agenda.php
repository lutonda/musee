<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 *
 * @ORM\Table(name="Agenda", indexes={@ORM\Index(name="fk_eventos_1", columns={"idEvento"}), @ORM\Index(name="fk_local_1", columns={"local"}), @ORM\Index(name="fk_orador_1", columns={"orador"})})
 * @ORM\Entity
 */
class Agenda
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
     * @ORM\Column(name="categoria", type="integer", nullable=true)
     */
    private $categoria;

    /**
     * @var integer
     *
     * @ORM\Column(name="hora", type="integer", nullable=true)
     */
    private $hora;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataAgenda", type="datetime", nullable=true)
     */
    private $dataagenda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=false)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var \Evento
     *
     * @ORM\ManyToOne(targetEntity="Evento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEvento", referencedColumnName="id")
     * })
     */
    private $idevento;

    /**
     * @var \Lugar
     *
     * @ORM\ManyToOne(targetEntity="Lugar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="local", referencedColumnName="id")
     * })
     */
    private $local;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orador", referencedColumnName="id")
     * })
     */
    private $orador;


}

