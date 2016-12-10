<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Formasdoscristais;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Formasdoscristai controller.
 *
 * @Route("formasdoscristais")
 */
class FormasdoscristaisController extends Controller
{
    /**
     * Lists all formasdoscristai entities.
     *
     * @Route("/", name="formasdoscristais_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formasdoscristais = $em->getRepository('AppBundle:Formasdoscristais')->findAll();

        return $this->render('formasdoscristais/index.html.twig', array(
            'formasdoscristais' => $formasdoscristais,
        ));
    }

    /**
     * Finds and displays a formasdoscristai entity.
     *
     * @Route("/{id}", name="formasdoscristais_show")
     * @Method("GET")
     */
    public function showAction(Formasdoscristais $formasdoscristai)
    {

        return $this->render('formasdoscristais/show.html.twig', array(
            'formasdoscristai' => $formasdoscristai,
        ));
    }
}
