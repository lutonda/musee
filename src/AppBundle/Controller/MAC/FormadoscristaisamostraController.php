<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Formadoscristaisamostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Formadoscristaisamostra controller.
 *
 * @Route("formadoscristaisamostra")
 */
class FormadoscristaisamostraController extends Controller
{
    /**
     * Lists all formadoscristaisamostra entities.
     *
     * @Route("/", name="formadoscristaisamostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formadoscristaisamostras = $em->getRepository('AppBundle:Formadoscristaisamostra')->findAll();

        return $this->render('formadoscristaisamostra/index.html.twig', array(
            'formadoscristaisamostras' => $formadoscristaisamostras,
        ));
    }

    /**
     * Creates a new formadoscristaisamostra entity.
     *
     * @Route("/new", name="formadoscristaisamostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $formadoscristaisamostra = new Formadoscristaisamostra();
        $form = $this->createForm('AppBundle\Form\FormadoscristaisamostraType', $formadoscristaisamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formadoscristaisamostra);
            $em->flush($formadoscristaisamostra);

            return $this->redirectToRoute('formadoscristaisamostra_show', array('id' => $formadoscristaisamostra->getId()));
        }

        return $this->render('formadoscristaisamostra/new.html.twig', array(
            'formadoscristaisamostra' => $formadoscristaisamostra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a formadoscristaisamostra entity.
     *
     * @Route("/{id}", name="formadoscristaisamostra_show")
     * @Method("GET")
     */
    public function showAction(Formadoscristaisamostra $formadoscristaisamostra)
    {
        $deleteForm = $this->createDeleteForm($formadoscristaisamostra);

        return $this->render('formadoscristaisamostra/show.html.twig', array(
            'formadoscristaisamostra' => $formadoscristaisamostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing formadoscristaisamostra entity.
     *
     * @Route("/{id}/edit", name="formadoscristaisamostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Formadoscristaisamostra $formadoscristaisamostra)
    {
        $deleteForm = $this->createDeleteForm($formadoscristaisamostra);
        $editForm = $this->createForm('AppBundle\Form\FormadoscristaisamostraType', $formadoscristaisamostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('formadoscristaisamostra_edit', array('id' => $formadoscristaisamostra->getId()));
        }

        return $this->render('formadoscristaisamostra/edit.html.twig', array(
            'formadoscristaisamostra' => $formadoscristaisamostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a formadoscristaisamostra entity.
     *
     * @Route("/{id}", name="formadoscristaisamostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Formadoscristaisamostra $formadoscristaisamostra)
    {
        $form = $this->createDeleteForm($formadoscristaisamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formadoscristaisamostra);
            $em->flush($formadoscristaisamostra);
        }

        return $this->redirectToRoute('formadoscristaisamostra_index');
    }

    /**
     * Creates a form to delete a formadoscristaisamostra entity.
     *
     * @param Formadoscristaisamostra $formadoscristaisamostra The formadoscristaisamostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Formadoscristaisamostra $formadoscristaisamostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formadoscristaisamostra_delete', array('id' => $formadoscristaisamostra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
