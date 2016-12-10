<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 05-11-2016
 * Time: 0:38
 */

namespace AppBundle\Domain\MUS;

use AppBundle\Data\MUS\Pessoa;
use AppBundle\Data\MUS\Usuario;
use AppBundle\Data\SYS\Municipio;
use AppBundle\Domain\SYS\MunicipioRepositorio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Data\MUS\Curso;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Domain\SYS;

class UsuarioRepositorio extends EntityRepository implements UserLoaderInterface
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function mostrarTodos(){


        $usuario = $this
            ->em
            ->getRepository('AppBundle:MUS\Usuario')
            ->findAll();
        for ($i = 0; $i < sizeof($usuario);$i++)
            $usuario[$i] = $this->mostrarUm($usuario[$i]->getId());

        return $usuario;
    }
    public function mostrarUm($id){

        $en = new SYS\enuRepositorio();
        $usuario = new Usuario();
        $ps = new PessoaRepositorio($this->em);
        $pessoa = new Pessoa();
        $qb = $this->em->createQueryBuilder();
        $qb = $qb->select('u', 'p')
            ->from('AppBundle:MUS\Usuario', 'u')
            ->leftJoin('u.idpessoa', 'p')
            ->select('u.id', 'u.username', 'u.tipo', 'u.roles','u.estado','u.data','p.id as pessoa')
            ->where('u.id='.$id)
            ->getQuery();

        $qb=$qb->getResult();
        $qb=$qb[0];
        $pessoa->setId($qb['pessoa']);
        $usuario->setId($id);
        $usuario->setUsername($qb['username']);
        $usuario->setTipo($en->tipoPessoaEnum($qb['tipo']));
        $usuario->setRoles($qb['roles']);
        $usuario->setIdpessoa($ps->mostrarUm($pessoa));
        $usuario->setEstado($qb['estado']);
        $usuario->setData($qb['data']);
        return $usuario;
    }

    public function loadUserByUsername($username)
    {
        $user = $this->createQueryBuilder('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery()
            ->getOneOrNullResult();

        if (null === $user) {
            $message = sprintf(
                'Unable to find an active admin AppBundle:User object identified by "%s".',
                $username
            );
            throw new UsernameNotFoundException($message);
        }

        return $user;
    }

}