<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 02-11-2016
 * Time: 8:46
 */

namespace AppBundle\Domain\MUS;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Data\MUS\Curso;
use Doctrine\ORM\EntityManager;

class CursoRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){
        $pais = $this
            ->em
            ->getRepository('AppBundle:MUS\Curso')
            ->findAll();
        return $pais;
    }
    public function mostrarUm($idCurso){
        $curso = new Curso();
        $qb = $this->em->getRepository('AppBundle:MUS\Curso')
            ->createQueryBuilder('c')
            ->select('c.id', 'c.nome', 'c.descricao')
            ->where('c.id='.$idCurso)
            ->getQuery();

        $qb=$qb->getResult()[0];
        $curso->setId($idCurso);
        $curso->setNome($qb['nome']);
        $curso->setDescricao($qb['descricao']);
        return $curso;
    }

}