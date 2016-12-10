<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 02-11-2016
 * Time: 13:28
 */

namespace AppBundle\Domain\MUS;

use AppBundle\Data\MUS\Contactos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Data\MUS\Tipocontacto;
use Doctrine\ORM\EntityManager;

class tipocontactoRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){
        $tipocontactos = $this
            ->em
            ->getRepository('AppBundle:MUS\Tipocontacto')
            ->findAll();
        return $tipocontactos;
    }
    public function mostrarUm($id){
        $tipocontacto = new Tipocontacto();
        $qb = $this->em->getRepository('AppBundle:MUS\Tipocontacto')
            ->createQueryBuilder('t')
            ->select('t.id', 't.nome')
            ->where('t.id='.$id)
            ->getQuery();

        $qb=$qb->getResult()[0];
        $tipocontacto->setId($id);
        $tipocontacto->setNome($qb['nome']);
        return $tipocontacto;
    }

}