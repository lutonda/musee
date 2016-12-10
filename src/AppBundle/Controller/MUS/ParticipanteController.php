<?php

namespace AppBundle\Controller\MUS;

use AppBundle\Entity\Participante;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Participante controller.
 *
 * @Route("participante")
 */
class ParticipanteController extends Controller
{
    /**
     * Lists all participante entities.
     *
     * @Route("/", name="participante_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $participantes = $em->getRepository('AppBundle:Participante')->findAll();

        return $this->render('participante/index.html.twig', array(
            'participantes' => $participantes,
        ));
    }

    /**
     * Creates a new participante entity.
     *
     * @Route("/new", name="participante_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $participante = new Participante();
        $form = $this->createForm('AppBundle\Form\ParticipanteType', $participante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($participante);
            $em->flush($participante);

            return $this->redirectToRoute('participante_show', array('id' => $participante->getId()));
        }

        return $this->render('participante/new.html.twig', array(
            'participante' => $participante,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a participante entity.
     *
     * @Route("/{id}", name="participante_show")
     * @Method("GET")
     */
    public function showAction(Participante $participante)
    {
        $deleteForm = $this->createDeleteForm($participante);

        return $this->render('participante/show.html.twig', array(
            'participante' => $participante,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing participante entity.
     *
     * @Route("/{id}/edit", name="participante_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Participante $participante)
    {
        $deleteForm = $this->createDeleteForm($participante);
        $editForm = $this->createForm('AppBundle\Form\ParticipanteType', $participante);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('participante_edit', array('id' => $participante->getId()));
        }

        return $this->render('participante/edit.html.twig', array(
            'participante' => $participante,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a participante entity.
     *
     * @Route("/{id}", name="participante_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Participante $participante)
    {
        $form = $this->createDeleteForm($participante);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($participante);
            $em->flush($participante);
        }

        return $this->redirectToRoute('participante_index');
    }

    /**
     * Creates a form to delete a participante entity.
     *
     * @param Participante $participante The participante entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Participante $participante)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('participante_delete', array('id' => $participante->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
