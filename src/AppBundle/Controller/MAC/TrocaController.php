<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Troca;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Troca controller.
 *
 * @Route("troca")
 */
class TrocaController extends Controller
{
    /**
     * Lists all troca entities.
     *
     * @Route("/", name="troca_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $trocas = $em->getRepository('AppBundle:Troca')->findAll();

        return $this->render('troca/index.html.twig', array(
            'trocas' => $trocas,
        ));
    }

    /**
     * Creates a new troca entity.
     *
     * @Route("/new", name="troca_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $troca = new Troca();
        $form = $this->createForm('AppBundle\Form\TrocaType', $troca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($troca);
            $em->flush($troca);

            return $this->redirectToRoute('troca_show', array('id' => $troca->getId()));
        }

        return $this->render('troca/new.html.twig', array(
            'troca' => $troca,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a troca entity.
     *
     * @Route("/{id}", name="troca_show")
     * @Method("GET")
     */
    public function showAction(Troca $troca)
    {
        $deleteForm = $this->createDeleteForm($troca);

        return $this->render('troca/show.html.twig', array(
            'troca' => $troca,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing troca entity.
     *
     * @Route("/{id}/edit", name="troca_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Troca $troca)
    {
        $deleteForm = $this->createDeleteForm($troca);
        $editForm = $this->createForm('AppBundle\Form\TrocaType', $troca);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('troca_edit', array('id' => $troca->getId()));
        }

        return $this->render('troca/edit.html.twig', array(
            'troca' => $troca,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a troca entity.
     *
     * @Route("/{id}", name="troca_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Troca $troca)
    {
        $form = $this->createDeleteForm($troca);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($troca);
            $em->flush($troca);
        }

        return $this->redirectToRoute('troca_index');
    }

    /**
     * Creates a form to delete a troca entity.
     *
     * @param Troca $troca The troca entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Troca $troca)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('troca_delete', array('id' => $troca->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
