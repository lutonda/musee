<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Coramostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Coramostra controller.
 *
 * @Route("coramostra")
 */
class CoramostraController extends Controller
{
    /**
     * Lists all coramostra entities.
     *
     * @Route("/", name="coramostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $coramostras = $em->getRepository('AppBundle:Coramostra')->findAll();

        return $this->render('coramostra/index.html.twig', array(
            'coramostras' => $coramostras,
        ));
    }

    /**
     * Finds and displays a coramostra entity.
     *
     * @Route("/{id}", name="coramostra_show")
     * @Method("GET")
     */
    public function showAction(Coramostra $coramostra)
    {

        return $this->render('coramostra/show.html.twig', array(
            'coramostra' => $coramostra,
        ));
    }
}
