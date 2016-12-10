<?php
/**
 * Created by PhpStorm.
 * User: luthonda
 * Date: 25-10-2016
 * Time: 6:19
 */

namespace AppBundle\Controller\MAC;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class novoCOntroller extends Controller
{

    /**
     * @Route("/MAC/ajudax")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render ('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}
