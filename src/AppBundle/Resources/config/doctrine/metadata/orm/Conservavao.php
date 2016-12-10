<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Conservavao
 *
 * @ORM\Table(name="Conservavao")
 * @ORM\Entity
 */
class Conservavao
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
     * @ORM\Column(name="temperaturaMin", type="integer", nullable=true)
     */
    private $temperaturamin;

    /**
     * @var integer
     *
     * @ORM\Column(name="temperaturaMax", type="integer", nullable=true)
     */
    private $temperaturamax;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sensibilidadeLuminosa", type="boolean", nullable=true)
     */
    private $sensibilidadeluminosa;


}

