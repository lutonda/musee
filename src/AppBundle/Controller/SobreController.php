<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SobreController extends Controller
{
    /**
     * @Route("/loginx")
     */

    public function indexAction(Request $request)
    {
        $i=0;
        // replace this example code with whatever you need
        return $this->render('login.html.twig');
    }
}
