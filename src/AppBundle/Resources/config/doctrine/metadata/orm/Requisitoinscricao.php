<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Requisitoinscricao
 *
 * @ORM\Table(name="RequisitoInscricao", indexes={@ORM\Index(name="fk_agenda_1", columns={"idAgenda"})})
 * @ORM\Entity
 */
class Requisitoinscricao
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
     * @ORM\Column(name="idadeInicial", type="integer", nullable=true)
     */
    private $idadeinicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="idadeFinal", type="integer", nullable=true)
     */
    private $idadefinal;

    /**
     * @var integer
     *
     * @ORM\Column(name="genero", type="integer", nullable=true)
     */
    private $genero;

    /**
     * @var integer
     *
     * @ORM\Column(name="nacionalidade", type="integer", nullable=true)
     */
    private $nacionalidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="grupo", type="integer", nullable=true)
     */
    private $grupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelAcademico", type="integer", nullable=true)
     */
    private $nivelacademico;

    /**
     * @var integer
     *
     * @ORM\Column(name="fechado", type="integer", nullable=true)
     */
    private $fechado;

    /**
     * @var \Agenda
     *
     * @ORM\ManyToOne(targetEntity="Agenda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAgenda", referencedColumnName="id")
     * })
     */
    private $idagenda;


}

