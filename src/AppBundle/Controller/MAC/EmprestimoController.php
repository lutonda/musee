<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Emprestimo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Emprestimo controller.
 *
 * @Route("emprestimo")
 */
class EmprestimoController extends Controller
{
    /**
     * Lists all emprestimo entities.
     *
     * @Route("/", name="emprestimo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $emprestimos = $em->getRepository('AppBundle:Emprestimo')->findAll();

        return $this->render('emprestimo/index.html.twig', array(
            'emprestimos' => $emprestimos,
        ));
    }

    /**
     * Creates a new emprestimo entity.
     *
     * @Route("/new", name="emprestimo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $emprestimo = new Emprestimo();
        $form = $this->createForm('AppBundle\Form\EmprestimoType', $emprestimo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($emprestimo);
            $em->flush($emprestimo);

            return $this->redirectToRoute('emprestimo_show', array('id' => $emprestimo->getId()));
        }

        return $this->render('emprestimo/new.html.twig', array(
            'emprestimo' => $emprestimo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a emprestimo entity.
     *
     * @Route("/{id}", name="emprestimo_show")
     * @Method("GET")
     */
    public function showAction(Emprestimo $emprestimo)
    {
        $deleteForm = $this->createDeleteForm($emprestimo);

        return $this->render('emprestimo/show.html.twig', array(
            'emprestimo' => $emprestimo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing emprestimo entity.
     *
     * @Route("/{id}/edit", name="emprestimo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Emprestimo $emprestimo)
    {
        $deleteForm = $this->createDeleteForm($emprestimo);
        $editForm = $this->createForm('AppBundle\Form\EmprestimoType', $emprestimo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('emprestimo_edit', array('id' => $emprestimo->getId()));
        }

        return $this->render('emprestimo/edit.html.twig', array(
            'emprestimo' => $emprestimo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a emprestimo entity.
     *
     * @Route("/{id}", name="emprestimo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Emprestimo $emprestimo)
    {
        $form = $this->createDeleteForm($emprestimo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($emprestimo);
            $em->flush($emprestimo);
        }

        return $this->redirectToRoute('emprestimo_index');
    }

    /**
     * Creates a form to delete a emprestimo entity.
     *
     * @param Emprestimo $emprestimo The emprestimo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Emprestimo $emprestimo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('emprestimo_delete', array('id' => $emprestimo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
