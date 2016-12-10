<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Dureza;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Dureza controller.
 *
 * @Route("dureza")
 */
class DurezaController extends Controller
{
    /**
     * Lists all dureza entities.
     *
     * @Route("/", name="dureza_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $durezas = $em->getRepository('AppBundle:Dureza')->findAll();

        return $this->render('dureza/index.html.twig', array(
            'durezas' => $durezas,
        ));
    }

    /**
     * Creates a new dureza entity.
     *
     * @Route("/new", name="dureza_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $dureza = new Dureza();
        $form = $this->createForm('AppBundle\Form\DurezaType', $dureza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dureza);
            $em->flush($dureza);

            return $this->redirectToRoute('dureza_show', array('id' => $dureza->getId()));
        }

        return $this->render('dureza/new.html.twig', array(
            'dureza' => $dureza,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a dureza entity.
     *
     * @Route("/{id}", name="dureza_show")
     * @Method("GET")
     */
    public function showAction(Dureza $dureza)
    {
        $deleteForm = $this->createDeleteForm($dureza);

        return $this->render('dureza/show.html.twig', array(
            'dureza' => $dureza,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing dureza entity.
     *
     * @Route("/{id}/edit", name="dureza_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Dureza $dureza)
    {
        $deleteForm = $this->createDeleteForm($dureza);
        $editForm = $this->createForm('AppBundle\Form\DurezaType', $dureza);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dureza_edit', array('id' => $dureza->getId()));
        }

        return $this->render('dureza/edit.html.twig', array(
            'dureza' => $dureza,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a dureza entity.
     *
     * @Route("/{id}", name="dureza_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Dureza $dureza)
    {
        $form = $this->createDeleteForm($dureza);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dureza);
            $em->flush($dureza);
        }

        return $this->redirectToRoute('dureza_index');
    }

    /**
     * Creates a form to delete a dureza entity.
     *
     * @param Dureza $dureza The dureza entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Dureza $dureza)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('dureza_delete', array('id' => $dureza->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
