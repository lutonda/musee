<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 02-11-2016
 * Time: 8:32
 */

namespace AppBundle\Domain\MUS;


use AppBundle\Data\MUS\Pessoa;
use AppBundle\Data\SYS\Municipio;
use AppBundle\Domain\SYS\MunicipioRepositorio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Data\MUS\Curso;
use Doctrine\ORM\EntityManager;
use AppBundle\Domain\SYS;

class PessoaRepositorio
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){


        $em = new PessoaRepositorio($this->em);
        $pessoas = $this
            ->em
            ->getRepository('AppBundle:MUS\Pessoa')
            ->findAll();
        for ($i = 0; $i < sizeof($pessoas);$i++)
            $pessoas[$i]=$em->mostrarUm($pessoas[$i]);

        return $pessoas;
    }
    public function mostrarUm(Pessoa $pessoa){
        $en = new SYS\enuRepositorio();
        $cr = new CursoRepositorio($this->em);
        $mr = new MunicipioRepositorio($this->em);
        $ct = new ConstactosRepositorio($this->em);

        $qb = $this->em->createQueryBuilder();
        $qb = $qb->select('c', 'p')
            ->from('AppBundle:MUS\Pessoa', 'p')
            ->leftJoin('p.curso', 'c')
            ->leftJoin('p.especialidade', 'e')
            ->leftJoin('p.morada', 'm')
            ->leftJoin('p.naturalidade', 'n')
            ->select('p.id', 'p.nome', 'p.numero','p.genero','p.estado','p.tipo', 'm.id as morada','p.nivelacademico','c.id as curso','e.id as especialidade','n.id as naturalidade')
            ->where('p.id='.$pessoa->getId())
            ->getQuery();

        $qb=$qb->getResult();
        $qb=$qb[0];
        $curso = $cr->mostrarUm($qb['curso']);
        $pessoa->setNome($qb['nome']);
        $pessoa->setNumero($qb['numero']);
        $pessoa->setGenero($en->generoEnum($qb['genero']));
        $pessoa->setEstado($en->estadoEnum($qb['estado']));
        $pessoa->setTipo($en->tipoPessoaEnum($qb['tipo']));
        $pessoa->setNivelacademico($qb['nivelacademico']);
        $pessoa->setCurso($cr->mostrarUm($qb['curso']));
        $pessoa->setEspecialidade($cr->mostrarUm($qb['especialidade']));
        $pessoa->setMorada($mr->mostrarUm($qb['morada']));
        $pessoa->setNaturalidade($mr->mostrarUm($qb['naturalidade']));
        $pessoa->setContactos($ct->mostrarPessoa($pessoa->getId()));
        return $pessoa;
    }

}