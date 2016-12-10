<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Localizacaoamostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Localizacaoamostra controller.
 *
 * @Route("localizacaoamostra")
 */
class LocalizacaoamostraController extends Controller
{
    /**
     * Lists all localizacaoamostra entities.
     *
     * @Route("/", name="localizacaoamostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $localizacaoamostras = $em->getRepository('AppBundle:Localizacaoamostra')->findAll();

        return $this->render('localizacaoamostra/index.html.twig', array(
            'localizacaoamostras' => $localizacaoamostras,
        ));
    }

    /**
     * Creates a new localizacaoamostra entity.
     *
     * @Route("/new", name="localizacaoamostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $localizacaoamostra = new Localizacaoamostra();
        $form = $this->createForm('AppBundle\Form\LocalizacaoamostraType', $localizacaoamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($localizacaoamostra);
            $em->flush($localizacaoamostra);

            return $this->redirectToRoute('localizacaoamostra_show', array('id' => $localizacaoamostra->getId()));
        }

        return $this->render('localizacaoamostra/new.html.twig', array(
            'localizacaoamostra' => $localizacaoamostra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a localizacaoamostra entity.
     *
     * @Route("/{id}", name="localizacaoamostra_show")
     * @Method("GET")
     */
    public function showAction(Localizacaoamostra $localizacaoamostra)
    {
        $deleteForm = $this->createDeleteForm($localizacaoamostra);

        return $this->render('localizacaoamostra/show.html.twig', array(
            'localizacaoamostra' => $localizacaoamostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing localizacaoamostra entity.
     *
     * @Route("/{id}/edit", name="localizacaoamostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Localizacaoamostra $localizacaoamostra)
    {
        $deleteForm = $this->createDeleteForm($localizacaoamostra);
        $editForm = $this->createForm('AppBundle\Form\LocalizacaoamostraType', $localizacaoamostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('localizacaoamostra_edit', array('id' => $localizacaoamostra->getId()));
        }

        return $this->render('localizacaoamostra/edit.html.twig', array(
            'localizacaoamostra' => $localizacaoamostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a localizacaoamostra entity.
     *
     * @Route("/{id}", name="localizacaoamostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Localizacaoamostra $localizacaoamostra)
    {
        $form = $this->createDeleteForm($localizacaoamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($localizacaoamostra);
            $em->flush($localizacaoamostra);
        }

        return $this->redirectToRoute('localizacaoamostra_index');
    }

    /**
     * Creates a form to delete a localizacaoamostra entity.
     *
     * @param Localizacaoamostra $localizacaoamostra The localizacaoamostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Localizacaoamostra $localizacaoamostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('localizacaoamostra_delete', array('id' => $localizacaoamostra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
