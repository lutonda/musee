<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 01-11-2016
 * Time: 22:12
 */


namespace AppBundle\Controller\SYS;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

class entityManagerController extends Controller
{
    public $em;
    public function __construct()
    {
        $em=$this->getDoctrine()->getEntityManager();
    }


}
