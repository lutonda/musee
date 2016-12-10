<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 01-11-2016
 * Time: 19:30
 */

namespace AppBundle\Domain\SYS;

use AppBundle\Data\SYS\Provincia;
use Doctrine\ORM\EntityManager;

class ProvinciaRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){

        $em = new PaisRepositorio($this->em);
        $provincia = $this
            ->em
            ->getRepository('AppBundle:SYS\Provincia')
            ->findAll();
        for ($i = 0; $i < sizeof($provincia);$i++) {
            //$pais=$this->paisProvincia($provincia[$i]->getIdpais());

            $pais = $em->mostrarUm($provincia[$i]->getIdpais()->getId());
            $provincia[$i]->setIdpais($pais);
        }
        return $provincia;
    }
    public function mostrarUm($idProvincia){
        $pais = new PaisRepositorio($this->em);
        $provincia = new Provincia();
        //$qb = $this->em->getRepository('AppBundle:SYS\Provincia')
        $qb=$this->em->createQueryBuilder();
        $qb=$qb->select('c','p')
            ->from('AppBundle:SYS\Provincia','p')
            ->leftJoin('p.idpais','c')
            ->select('p.id', 'p.nome', 'c.id as pais')
            ->where('p.id='.$idProvincia)
            ->getQuery();

        $qb=$qb->getResult();
        $qb=$qb[0];
        $pais = $pais->mostrarUm($qb['pais']);
        $provincia->setNome($qb['nome']);
        $provincia->setIdpais($pais);
        return $provincia;
    }

}