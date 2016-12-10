<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Reserva;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Reserva controller.
 *
 * @Route("reserva")
 */
class ReservaController extends Controller
{
    /**
     * Lists all reserva entities.
     *
     * @Route("/", name="reserva_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservas = $em->getRepository('AppBundle:Reserva')->findAll();

        return $this->render('reserva/index.html.twig', array(
            'reservas' => $reservas,
        ));
    }

    /**
     * Finds and displays a reserva entity.
     *
     * @Route("/{id}", name="reserva_show")
     * @Method("GET")
     */
    public function showAction(Reserva $reserva)
    {

        return $this->render('reserva/show.html.twig', array(
            'reserva' => $reserva,
        ));
    }
}
