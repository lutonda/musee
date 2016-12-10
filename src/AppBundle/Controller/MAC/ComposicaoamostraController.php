<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Composicaoamostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Composicaoamostra controller.
 *
 * @Route("composicaoamostra")
 */
class ComposicaoamostraController extends Controller
{
    /**
     * Lists all composicaoamostra entities.
     *
     * @Route("/", name="composicaoamostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $composicaoamostras = $em->getRepository('AppBundle:Composicaoamostra')->findAll();

        return $this->render('composicaoamostra/index.html.twig', array(
            'composicaoamostras' => $composicaoamostras,
        ));
    }

    /**
     * Creates a new composicaoamostra entity.
     *
     * @Route("/new", name="composicaoamostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $composicaoamostra = new Composicaoamostra();
        $form = $this->createForm('AppBundle\Form\ComposicaoamostraType', $composicaoamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($composicaoamostra);
            $em->flush($composicaoamostra);

            return $this->redirectToRoute('composicaoamostra_show', array('id' => $composicaoamostra->getId()));
        }

        return $this->render('composicaoamostra/new.html.twig', array(
            'composicaoamostra' => $composicaoamostra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a composicaoamostra entity.
     *
     * @Route("/{id}", name="composicaoamostra_show")
     * @Method("GET")
     */
    public function showAction(Composicaoamostra $composicaoamostra)
    {
        $deleteForm = $this->createDeleteForm($composicaoamostra);

        return $this->render('composicaoamostra/show.html.twig', array(
            'composicaoamostra' => $composicaoamostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing composicaoamostra entity.
     *
     * @Route("/{id}/edit", name="composicaoamostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Composicaoamostra $composicaoamostra)
    {
        $deleteForm = $this->createDeleteForm($composicaoamostra);
        $editForm = $this->createForm('AppBundle\Form\ComposicaoamostraType', $composicaoamostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('composicaoamostra_edit', array('id' => $composicaoamostra->getId()));
        }

        return $this->render('composicaoamostra/edit.html.twig', array(
            'composicaoamostra' => $composicaoamostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a composicaoamostra entity.
     *
     * @Route("/{id}", name="composicaoamostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Composicaoamostra $composicaoamostra)
    {
        $form = $this->createDeleteForm($composicaoamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($composicaoamostra);
            $em->flush($composicaoamostra);
        }

        return $this->redirectToRoute('composicaoamostra_index');
    }

    /**
     * Creates a form to delete a composicaoamostra entity.
     *
     * @param Composicaoamostra $composicaoamostra The composicaoamostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Composicaoamostra $composicaoamostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('composicaoamostra_delete', array('id' => $composicaoamostra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
