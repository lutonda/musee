<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Parageneseamostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Parageneseamostra controller.
 *
 * @Route("parageneseamostra")
 */
class ParageneseamostraController extends Controller
{
    /**
     * Lists all parageneseamostra entities.
     *
     * @Route("/", name="parageneseamostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $parageneseamostras = $em->getRepository('AppBundle:Parageneseamostra')->findAll();

        return $this->render('parageneseamostra/index.html.twig', array(
            'parageneseamostras' => $parageneseamostras,
        ));
    }

    /**
     * Creates a new parageneseamostra entity.
     *
     * @Route("/new", name="parageneseamostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $parageneseamostra = new Parageneseamostra();
        $form = $this->createForm('AppBundle\Form\ParageneseamostraType', $parageneseamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($parageneseamostra);
            $em->flush($parageneseamostra);

            return $this->redirectToRoute('parageneseamostra_show', array('id' => $parageneseamostra->getId()));
        }

        return $this->render('parageneseamostra/new.html.twig', array(
            'parageneseamostra' => $parageneseamostra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a parageneseamostra entity.
     *
     * @Route("/{id}", name="parageneseamostra_show")
     * @Method("GET")
     */
    public function showAction(Parageneseamostra $parageneseamostra)
    {
        $deleteForm = $this->createDeleteForm($parageneseamostra);

        return $this->render('parageneseamostra/show.html.twig', array(
            'parageneseamostra' => $parageneseamostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing parageneseamostra entity.
     *
     * @Route("/{id}/edit", name="parageneseamostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Parageneseamostra $parageneseamostra)
    {
        $deleteForm = $this->createDeleteForm($parageneseamostra);
        $editForm = $this->createForm('AppBundle\Form\ParageneseamostraType', $parageneseamostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('parageneseamostra_edit', array('id' => $parageneseamostra->getId()));
        }

        return $this->render('parageneseamostra/edit.html.twig', array(
            'parageneseamostra' => $parageneseamostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a parageneseamostra entity.
     *
     * @Route("/{id}", name="parageneseamostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Parageneseamostra $parageneseamostra)
    {
        $form = $this->createDeleteForm($parageneseamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($parageneseamostra);
            $em->flush($parageneseamostra);
        }

        return $this->redirectToRoute('parageneseamostra_index');
    }

    /**
     * Creates a form to delete a parageneseamostra entity.
     *
     * @param Parageneseamostra $parageneseamostra The parageneseamostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Parageneseamostra $parageneseamostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parageneseamostra_delete', array('id' => $parageneseamostra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
