<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 13-11-2016
 * Time: 17:28
 */

namespace AppBundle\Domain\SYS;


class enuRepositorio
{
    public function generoEnum($enum){
        $genero=array('Maculino','Fenmenino');
        return $genero[$enum];
    }
    public function estadoEnum($enum){
        $estado=array('Activo','Canselado','Suspenço','Excluido');
        return $estado[$enum];
    }
    public function tipoPessoaEnum($enum){
        $tipo=array('Admin','Funcionario','Individual','Grupo');
        return $tipo[$enum];
    }
}