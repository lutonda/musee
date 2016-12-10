<?php

namespace AppBundle\Controller\SYS;

use AppBundle\Data\SYS\Municipio;
use AppBundle\Domain\SYS\MunicipioRepositorio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Municipio controller.
 *
 * @Route("municipio")
 */
class MunicipioController extends Controller
{
    /**
     * Lists all municipio entities.
     *
     * @Route("/", name="municipio_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $municipios = new MunicipioRepositorio($em);
        $municipios = $municipios->mostrarTodos();

        return $this->render('municipio/index.html.twig', array(
            'municipios' => $municipios,
        ));
    }

    /**
     * Finds and displays a municipio entity.
     *
     * @Route("/{id}", name="municipio_show")
     * @Method("GET")
     */
    public function showAction(Municipio $municipio)
    {

        return $this->render('municipio/show.html.twig', array(
            'municipio' => $municipio,
        ));
    }
}
