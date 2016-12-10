<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Fraturaamostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Fraturaamostra controller.
 *
 * @Route("fraturaamostra")
 */
class FraturaamostraController extends Controller
{
    /**
     * Lists all fraturaamostra entities.
     *
     * @Route("/", name="fraturaamostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fraturaamostras = $em->getRepository('AppBundle:Fraturaamostra')->findAll();

        return $this->render('fraturaamostra/index.html.twig', array(
            'fraturaamostras' => $fraturaamostras,
        ));
    }

    /**
     * Creates a new fraturaamostra entity.
     *
     * @Route("/new", name="fraturaamostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fraturaamostra = new Fraturaamostra();
        $form = $this->createForm('AppBundle\Form\FraturaamostraType', $fraturaamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fraturaamostra);
            $em->flush($fraturaamostra);

            return $this->redirectToRoute('fraturaamostra_show', array('id' => $fraturaamostra->getId()));
        }

        return $this->render('fraturaamostra/new.html.twig', array(
            'fraturaamostra' => $fraturaamostra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fraturaamostra entity.
     *
     * @Route("/{id}", name="fraturaamostra_show")
     * @Method("GET")
     */
    public function showAction(Fraturaamostra $fraturaamostra)
    {
        $deleteForm = $this->createDeleteForm($fraturaamostra);

        return $this->render('fraturaamostra/show.html.twig', array(
            'fraturaamostra' => $fraturaamostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fraturaamostra entity.
     *
     * @Route("/{id}/edit", name="fraturaamostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Fraturaamostra $fraturaamostra)
    {
        $deleteForm = $this->createDeleteForm($fraturaamostra);
        $editForm = $this->createForm('AppBundle\Form\FraturaamostraType', $fraturaamostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fraturaamostra_edit', array('id' => $fraturaamostra->getId()));
        }

        return $this->render('fraturaamostra/edit.html.twig', array(
            'fraturaamostra' => $fraturaamostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fraturaamostra entity.
     *
     * @Route("/{id}", name="fraturaamostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Fraturaamostra $fraturaamostra)
    {
        $form = $this->createDeleteForm($fraturaamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fraturaamostra);
            $em->flush($fraturaamostra);
        }

        return $this->redirectToRoute('fraturaamostra_index');
    }

    /**
     * Creates a form to delete a fraturaamostra entity.
     *
     * @param Fraturaamostra $fraturaamostra The fraturaamostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fraturaamostra $fraturaamostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fraturaamostra_delete', array('id' => $fraturaamostra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
