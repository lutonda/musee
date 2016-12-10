<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 01-11-2016
 * Time: 19:30
 */

namespace AppBundle\Domain\SYS;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Data\SYS\Pais;
use Doctrine\ORM\EntityManager;

class PaisRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){
        $pais = $this
                ->em
                ->getRepository('AppBundle:SYS\Pais')
                ->findAll();
        return $pais;
    }
    public function mostrarUm($idPais){
        $pais = new Pais();
        $qb = $this->em->getRepository('AppBundle:SYS\Pais')
            ->createQueryBuilder('p')
            ->select('p.id', 'p.nome', 'p.continente')
            ->where('p.id='.$idPais)
            ->getQuery();

        $qb=$qb->getResult()[0];
        $pais->setNome($qb['nome']);
        $pais->setContinente($qb['continente']);
        return $pais;
    }

}