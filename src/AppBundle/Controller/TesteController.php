<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 23-09-2016
 * Time: 22:54
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TesteController extends Controller
{
    /**
     * @Route("/teste/{variavel}")
     */
    public function showAction($variavel=''){
        $paises=[
            'Afeganistão',
            'África do Sul',
            'Akrotiri',
            'Albânia',
            'Alemanha+++',
            'Andorra',
            'Angola'];
        return $this->render('teste/novo.html.twig',[
            'nome'=>$variavel,
            'paises'=>$paises
        ]);

    }
}