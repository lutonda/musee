<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Elementoquimico;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Elementoquimico controller.
 *
 * @Route("elementoquimico")
 */
class ElementoquimicoController extends Controller
{
    /**
     * Lists all elementoquimico entities.
     *
     * @Route("/", name="elementoquimico_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $elementoquimicos = $em->getRepository('AppBundle:Elementoquimico')->findAll();

        return $this->render('elementoquimico/index.html.twig', array(
            'elementoquimicos' => $elementoquimicos,
        ));
    }

    /**
     * Creates a new elementoquimico entity.
     *
     * @Route("/new", name="elementoquimico_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $elementoquimico = new Elementoquimico();
        $form = $this->createForm('AppBundle\Form\ElementoquimicoType', $elementoquimico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($elementoquimico);
            $em->flush($elementoquimico);

            return $this->redirectToRoute('elementoquimico_show', array('id' => $elementoquimico->getId()));
        }

        return $this->render('elementoquimico/new.html.twig', array(
            'elementoquimico' => $elementoquimico,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a elementoquimico entity.
     *
     * @Route("/{id}", name="elementoquimico_show")
     * @Method("GET")
     */
    public function showAction(Elementoquimico $elementoquimico)
    {
        $deleteForm = $this->createDeleteForm($elementoquimico);

        return $this->render('elementoquimico/show.html.twig', array(
            'elementoquimico' => $elementoquimico,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing elementoquimico entity.
     *
     * @Route("/{id}/edit", name="elementoquimico_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Elementoquimico $elementoquimico)
    {
        $deleteForm = $this->createDeleteForm($elementoquimico);
        $editForm = $this->createForm('AppBundle\Form\ElementoquimicoType', $elementoquimico);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('elementoquimico_edit', array('id' => $elementoquimico->getId()));
        }

        return $this->render('elementoquimico/edit.html.twig', array(
            'elementoquimico' => $elementoquimico,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a elementoquimico entity.
     *
     * @Route("/{id}", name="elementoquimico_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Elementoquimico $elementoquimico)
    {
        $form = $this->createDeleteForm($elementoquimico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($elementoquimico);
            $em->flush($elementoquimico);
        }

        return $this->redirectToRoute('elementoquimico_index');
    }

    /**
     * Creates a form to delete a elementoquimico entity.
     *
     * @param Elementoquimico $elementoquimico The elementoquimico entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Elementoquimico $elementoquimico)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('elementoquimico_delete', array('id' => $elementoquimico->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
