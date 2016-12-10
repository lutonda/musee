<?php

namespace AppBundle\Controller\MEV;

use AppBundle\Entity\Tipoevento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tipoevento controller.
 *
 * @Route("tipoevento")
 */
class TipoeventoController extends Controller
{
    /**
     * Lists all tipoevento entities.
     *
     * @Route("/", name="tipoevento_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipoeventos = $em->getRepository('AppBundle:Tipoevento')->findAll();

        return $this->render('tipoevento/index.html.twig', array(
            'tipoeventos' => $tipoeventos,
        ));
    }

    /**
     * Creates a new tipoevento entity.
     *
     * @Route("/new", name="tipoevento_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tipoevento = new Tipoevento();
        $form = $this->createForm('AppBundle\Form\TipoeventoType', $tipoevento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoevento);
            $em->flush($tipoevento);

            return $this->redirectToRoute('tipoevento_show', array('id' => $tipoevento->getId()));
        }

        return $this->render('tipoevento/new.html.twig', array(
            'tipoevento' => $tipoevento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipoevento entity.
     *
     * @Route("/{id}", name="tipoevento_show")
     * @Method("GET")
     */
    public function showAction(Tipoevento $tipoevento)
    {
        $deleteForm = $this->createDeleteForm($tipoevento);

        return $this->render('tipoevento/show.html.twig', array(
            'tipoevento' => $tipoevento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipoevento entity.
     *
     * @Route("/{id}/edit", name="tipoevento_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tipoevento $tipoevento)
    {
        $deleteForm = $this->createDeleteForm($tipoevento);
        $editForm = $this->createForm('AppBundle\Form\TipoeventoType', $tipoevento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipoevento_edit', array('id' => $tipoevento->getId()));
        }

        return $this->render('tipoevento/edit.html.twig', array(
            'tipoevento' => $tipoevento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tipoevento entity.
     *
     * @Route("/{id}", name="tipoevento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tipoevento $tipoevento)
    {
        $form = $this->createDeleteForm($tipoevento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoevento);
            $em->flush($tipoevento);
        }

        return $this->redirectToRoute('tipoevento_index');
    }

    /**
     * Creates a form to delete a tipoevento entity.
     *
     * @param Tipoevento $tipoevento The tipoevento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipoevento $tipoevento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoevento_delete', array('id' => $tipoevento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
