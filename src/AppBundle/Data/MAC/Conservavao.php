<?php

namespace AppBundle\Entity;

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
     * Set temperaturamin
     *
     * @param integer $temperaturamin
     *
     * @return Conservavao
     */
    public function setTemperaturamin($temperaturamin)
    {
        $this->temperaturamin = $temperaturamin;

        return $this;
    }

    /**
     * Get temperaturamin
     *
     * @return integer
     */
    public function getTemperaturamin()
    {
        return $this->temperaturamin;
    }

    /**
     * Set temperaturamax
     *
     * @param integer $temperaturamax
     *
     * @return Conservavao
     */
    public function setTemperaturamax($temperaturamax)
    {
        $this->temperaturamax = $temperaturamax;

        return $this;
    }

    /**
     * Get temperaturamax
     *
     * @return integer
     */
    public function getTemperaturamax()
    {
        return $this->temperaturamax;
    }

    /**
     * Set sensibilidadeluminosa
     *
     * @param boolean $sensibilidadeluminosa
     *
     * @return Conservavao
     */
    public function setSensibilidadeluminosa($sensibilidadeluminosa)
    {
        $this->sensibilidadeluminosa = $sensibilidadeluminosa;

        return $this;
    }

    /**
     * Get sensibilidadeluminosa
     *
     * @return boolean
     */
    public function getSensibilidadeluminosa()
    {
        return $this->sensibilidadeluminosa;
    }
}
