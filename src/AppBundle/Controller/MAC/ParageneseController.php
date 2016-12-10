<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Paragenese;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Paragenese controller.
 *
 * @Route("paragenese")
 */
class ParageneseController extends Controller
{
    /**
     * Lists all paragenese entities.
     *
     * @Route("/", name="paragenese_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $paragenese = $em->getRepository('AppBundle:Paragenese')->findAll();

        return $this->render('paragenese/index.html.twig', array(
            'paragenese' => $paragenese,
        ));
    }

    /**
     * Creates a new paragenese entity.
     *
     * @Route("/new", name="paragenese_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $paragenese = new Paragenese();
        $form = $this->createForm('AppBundle\Form\ParageneseType', $paragenese);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($paragenese);
            $em->flush($paragenese);

            return $this->redirectToRoute('paragenese_show', array('id' => $paragenese->getId()));
        }

        return $this->render('paragenese/new.html.twig', array(
            'paragenese' => $paragenese,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a paragenese entity.
     *
     * @Route("/{id}", name="paragenese_show")
     * @Method("GET")
     */
    public function showAction(Paragenese $paragenese)
    {
        $deleteForm = $this->createDeleteForm($paragenese);

        return $this->render('paragenese/show.html.twig', array(
            'paragenese' => $paragenese,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing paragenese entity.
     *
     * @Route("/{id}/edit", name="paragenese_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Paragenese $paragenese)
    {
        $deleteForm = $this->createDeleteForm($paragenese);
        $editForm = $this->createForm('AppBundle\Form\ParageneseType', $paragenese);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('paragenese_edit', array('id' => $paragenese->getId()));
        }

        return $this->render('paragenese/edit.html.twig', array(
            'paragenese' => $paragenese,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a paragenese entity.
     *
     * @Route("/{id}", name="paragenese_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Paragenese $paragenese)
    {
        $form = $this->createDeleteForm($paragenese);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($paragenese);
            $em->flush($paragenese);
        }

        return $this->redirectToRoute('paragenese_index');
    }

    /**
     * Creates a form to delete a paragenese entity.
     *
     * @param Paragenese $paragenese The paragenese entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Paragenese $paragenese)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paragenese_delete', array('id' => $paragenese->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
