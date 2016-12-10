<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $i=0;
        // replace this example code with whatever you need
        return $this->render('index.html.twig',[
            'pagina'=>'inicio.html.twig'
        ]);
    }

    /**
     * @Route("/acervos", name="acervos")
     */
    public function acervosAction(Request $request)
    {
        $i=0;
        // replace this exampled code with whatever you need
        return $this->render('index.html.twig',[
            'pagina'=>'::inicio.html.twig'
        ]);
    }
    /**
     * @Route("/visitas", name="visitas")
     */
    public function visitasAction(Request $request)
    {
        $i=0;
        // replace this example code with whatever you need
        return $this->render('index.html.twig',[
            'pagina'=>'/visita/show.html.twig'
        ]);
    }
    /**
     * @Route("/eventos", name="eventos")
     */
    public function eventosAction(Request $request)
    {
        $i=0;
        // replace this example code with whatever you need
        return $this->render('index.html.twig',[
            'pagina'=>'usuario/show.html.twig'
        ]);
    }
    /**
     * @Route("/utilizadoresx", name="utilizadores_s")
     */
    public function utilizadoresAction(Request $request)
    {
        $i=0;
        // replace this example code with whatever you need
        return $this->render('index.html.twig',[
            'pagina'=>'usuario/show.html.twig'
        ]);
    }
}
