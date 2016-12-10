<?php

namespace AppBundle\Controller\MUS;

use AppBundle\Entity\Participantegrupo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Participantegrupo controller.
 *
 * @Route("participantegrupo")
 */
class ParticipantegrupoController extends Controller
{
    /**
     * Lists all participantegrupo entities.
     *
     * @Route("/", name="participantegrupo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $participantegrupos = $em->getRepository('AppBundle:Participantegrupo')->findAll();

        return $this->render('participantegrupo/index.html.twig', array(
            'participantegrupos' => $participantegrupos,
        ));
    }

    /**
     * Creates a new participantegrupo entity.
     *
     * @Route("/new", name="participantegrupo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $participantegrupo = new Participantegrupo();
        $form = $this->createForm('AppBundle\Form\ParticipantegrupoType', $participantegrupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($participantegrupo);
            $em->flush($participantegrupo);

            return $this->redirectToRoute('participantegrupo_show', array('id' => $participantegrupo->getId()));
        }

        return $this->render('participantegrupo/new.html.twig', array(
            'participantegrupo' => $participantegrupo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a participantegrupo entity.
     *
     * @Route("/{id}", name="participantegrupo_show")
     * @Method("GET")
     */
    public function showAction(Participantegrupo $participantegrupo)
    {
        $deleteForm = $this->createDeleteForm($participantegrupo);

        return $this->render('participantegrupo/show.html.twig', array(
            'participantegrupo' => $participantegrupo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing participantegrupo entity.
     *
     * @Route("/{id}/edit", name="participantegrupo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Participantegrupo $participantegrupo)
    {
        $deleteForm = $this->createDeleteForm($participantegrupo);
        $editForm = $this->createForm('AppBundle\Form\ParticipantegrupoType', $participantegrupo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('participantegrupo_edit', array('id' => $participantegrupo->getId()));
        }

        return $this->render('participantegrupo/edit.html.twig', array(
            'participantegrupo' => $participantegrupo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a participantegrupo entity.
     *
     * @Route("/{id}", name="participantegrupo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Participantegrupo $participantegrupo)
    {
        $form = $this->createDeleteForm($participantegrupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($participantegrupo);
            $em->flush($participantegrupo);
        }

        return $this->redirectToRoute('participantegrupo_index');
    }

    /**
     * Creates a form to delete a participantegrupo entity.
     *
     * @param Participantegrupo $participantegrupo The participantegrupo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Participantegrupo $participantegrupo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('participantegrupo_delete', array('id' => $participantegrupo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
