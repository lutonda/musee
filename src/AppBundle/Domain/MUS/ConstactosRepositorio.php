<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 04-11-2016
 * Time: 23:13
 */

namespace AppBundle\Domain\MUS;

use AppBundle\Data\MUS\Contactos;
use AppBundle\Data\MUS\Pessoa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class ConstactosRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){
        //$em = new ContactosRepositorio($this->em);
         $contactos= $this
            ->em
            ->getRepository('AppBundle:MUS\Contactos')
            ->findAll();
        for ($i = 0; $i < sizeof($contactos);$i++)
            $contactos[$i] = $this->mostrarUm($contactos[$i]);

        return $contactos;
    }
    public function mostrarUm($contacto){
        $tipocontacto = new tipocontactoRepositorio($this->em);
        $qb = $this->em
            ->createQueryBuilder();
        $qb=$qb->select('c','p')
            ->from('AppBundle:MUS\Contactos','c')
            ->leftJoin('c.idtiipocontacto','t')
            ->leftJoin('c.idpessoa','p')
            ->select('t.id as tipo', 'c.descricao as descricao','p.id as pessoa')
            ->where('c.id= :contacto')
            ->setParameter('contacto',$contacto->getId())
            ->getQuery();

        $qb=$qb->getResult()[0];
        $contacto->setId($contacto->getId());
        $contacto->setDescricao($qb['descricao']);
        $contacto->setIdtiipocontacto($tipocontacto->mostrarUm($qb['tipo']));
        $contacto->setIdpessoa($qb['pessoa']);
        return $contacto;
    }
    public function mostrarPessoa(Pessoa $pessoa){
        $contactos = array();
        $tipocontacto = new tipocontactoRepositorio($this->em);
        $qb = $this->em->createQueryBuilder();
        $qb=$qb->select('c','p')
            ->from('AppBundle:MUS\Contactos','c')
            ->leftJoin('c.idtiipocontacto','t')
            ->leftJoin('c.idpessoa','p')
            ->select('c.id as id','t.id as tipo', 'c.descricao as descricao','p.id as pessoa')
            ->where('p.id = :pessoa')
            ->setParameter('pessoa',$pessoa->getId())
            ->getQuery();
        $i=0;

        while (sizeof($qb->getResult())>$i) {
        $qc=$qb->getResult()[$i];;
        $contacto = new Contactos();
        $contacto->setId($qc['id']);
        $contacto->setDescricao($qc['descricao']);
        $contacto->setIdtiipocontacto($tipocontacto->mostrarUm($qc['tipo']));
        $contacto->setIdpessoa($qc['pessoa']);
            $contactos[$i++]=$contacto;
        }
        return $contactos;
    }

}