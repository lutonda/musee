<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Geneseamostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Geneseamostra controller.
 *
 * @Route("geneseamostra")
 */
class GeneseamostraController extends Controller
{
    /**
     * Lists all geneseamostra entities.
     *
     * @Route("/", name="geneseamostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $geneseamostras = $em->getRepository('AppBundle:Geneseamostra')->findAll();

        return $this->render('geneseamostra/index.html.twig', array(
            'geneseamostras' => $geneseamostras,
        ));
    }

    /**
     * Creates a new geneseamostra entity.
     *
     * @Route("/new", name="geneseamostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $geneseamostra = new Geneseamostra();
        $form = $this->createForm('AppBundle\Form\GeneseamostraType', $geneseamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($geneseamostra);
            $em->flush($geneseamostra);

            return $this->redirectToRoute('geneseamostra_show', array('id' => $geneseamostra->getId()));
        }

        return $this->render('geneseamostra/new.html.twig', array(
            'geneseamostra' => $geneseamostra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a geneseamostra entity.
     *
     * @Route("/{id}", name="geneseamostra_show")
     * @Method("GET")
     */
    public function showAction(Geneseamostra $geneseamostra)
    {
        $deleteForm = $this->createDeleteForm($geneseamostra);

        return $this->render('geneseamostra/show.html.twig', array(
            'geneseamostra' => $geneseamostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing geneseamostra entity.
     *
     * @Route("/{id}/edit", name="geneseamostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Geneseamostra $geneseamostra)
    {
        $deleteForm = $this->createDeleteForm($geneseamostra);
        $editForm = $this->createForm('AppBundle\Form\GeneseamostraType', $geneseamostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('geneseamostra_edit', array('id' => $geneseamostra->getId()));
        }

        return $this->render('geneseamostra/edit.html.twig', array(
            'geneseamostra' => $geneseamostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a geneseamostra entity.
     *
     * @Route("/{id}", name="geneseamostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Geneseamostra $geneseamostra)
    {
        $form = $this->createDeleteForm($geneseamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($geneseamostra);
            $em->flush($geneseamostra);
        }

        return $this->redirectToRoute('geneseamostra_index');
    }

    /**
     * Creates a form to delete a geneseamostra entity.
     *
     * @param Geneseamostra $geneseamostra The geneseamostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Geneseamostra $geneseamostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('geneseamostra_delete', array('id' => $geneseamostra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
