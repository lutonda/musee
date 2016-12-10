<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 01-11-2016
 * Time: 23:59
 */

namespace AppBundle\Domain\SYS;

use AppBundle\Data\SYS\Municipio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Data\SYS\Provincia;
use AppBundle\Data\SYS\Pais;
use Doctrine\ORM\EntityManager;

class MunicipioRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){

        $em = new ProvinciaRepositorio($this->em);
        $municipio = $this
            ->em
            ->getRepository('AppBundle:SYS\Municipio')
            ->findAll();
        for ($i = 0; $i < sizeof($municipio);$i++) {

            $provincia = $em->mostrarUm($municipio[$i]->getIdprovincia()->getId());
            $municipio[$i]->setIdprovincia($provincia);
        }
        return $municipio;
    }
    public function mostrarUm($idMunicipio){
        $pr = new ProvinciaRepositorio($this->em);
        $municipio = new Municipio();
        $qb=$this->em->createQueryBuilder();
        $qb=$qb->select('c','p')
            ->from('AppBundle:SYS\Municipio','m')
            ->leftJoin('m.idprovincia','p')
            ->select('m.id', 'm.nome', 'p.id as provincia')
            ->where('m.id='.$idMunicipio)
            ->getQuery();

        $qb=$qb->getResult();
        $qb=$qb[0];
        $municipio->setId($qb['id']);
        $municipio->setNome($qb['nome']);
        $municipio->setIdprovincia($pr->mostrarUm($qb['provincia']));

        return $municipio;
    }

}