<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Amostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Amostra controller.
 *
 * @Route("amostra")
 */
class AmostraController extends Controller
{
    /**
     * Lists all amostra entities.
     *
     * @Route("/", name="amostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $amostras = $em->getRepository('AppBundle:Amostra')->findAll();

        return $this->render('amostra/index.html.twig', array(
            'amostras' => $amostras,
        ));
    }

    /**
     * Creates a new amostra entity.
     *
     * @Route("/new", name="amostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $amostra = new Amostra();
        $form = $this->createForm('AppBundle\Form\AmostraType', $amostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($amostra);
            $em->flush($amostra);

            return $this->redirectToRoute('amostra_show', array('id' => $amostra->getId()));
        }

        return $this->render('amostra/new.html.twig', array(
            'amostra' => $amostra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a amostra entity.
     *
     * @Route("/{id}", name="amostra_show")
     * @Method("GET")
     */
    public function showAction(Amostra $amostra)
    {
        $deleteForm = $this->createDeleteForm($amostra);

        return $this->render('amostra/show.html.twig', array(
            'amostra' => $amostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing amostra entity.
     *
     * @Route("/{id}/edit", name="amostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Amostra $amostra)
    {
        $deleteForm = $this->createDeleteForm($amostra);
        $editForm = $this->createForm('AppBundle\Form\AmostraType', $amostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('amostra_edit', array('id' => $amostra->getId()));
        }

        return $this->render('amostra/edit.html.twig', array(
            'amostra' => $amostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a amostra entity.
     *
     * @Route("/{id}", name="amostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Amostra $amostra)
    {
        $form = $this->createDeleteForm($amostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($amostra);
            $em->flush($amostra);
        }

        return $this->redirectToRoute('amostra_index');
    }

    /**
     * Creates a form to delete a amostra entity.
     *
     * @param Amostra $amostra The amostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Amostra $amostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('amostra_delete', array('id' => $amostra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
