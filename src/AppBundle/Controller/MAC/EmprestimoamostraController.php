<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Emprestimoamostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Emprestimoamostra controller.
 *
 * @Route("emprestimoamostra")
 */
class EmprestimoamostraController extends Controller
{
    /**
     * Lists all emprestimoamostra entities.
     *
     * @Route("/", name="emprestimoamostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $emprestimoamostras = $em->getRepository('AppBundle:Emprestimoamostra')->findAll();

        return $this->render('emprestimoamostra/index.html.twig', array(
            'emprestimoamostras' => $emprestimoamostras,
        ));
    }

    /**
     * Creates a new emprestimoamostra entity.
     *
     * @Route("/new", name="emprestimoamostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $emprestimoamostra = new Emprestimoamostra();
        $form = $this->createForm('AppBundle\Form\EmprestimoamostraType', $emprestimoamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($emprestimoamostra);
            $em->flush($emprestimoamostra);

            return $this->redirectToRoute('emprestimoamostra_show', array('id' => $emprestimoamostra->getId()));
        }

        return $this->render('emprestimoamostra/new.html.twig', array(
            'emprestimoamostra' => $emprestimoamostra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a emprestimoamostra entity.
     *
     * @Route("/{id}", name="emprestimoamostra_show")
     * @Method("GET")
     */
    public function showAction(Emprestimoamostra $emprestimoamostra)
    {
        $deleteForm = $this->createDeleteForm($emprestimoamostra);

        return $this->render('emprestimoamostra/show.html.twig', array(
            'emprestimoamostra' => $emprestimoamostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing emprestimoamostra entity.
     *
     * @Route("/{id}/edit", name="emprestimoamostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Emprestimoamostra $emprestimoamostra)
    {
        $deleteForm = $this->createDeleteForm($emprestimoamostra);
        $editForm = $this->createForm('AppBundle\Form\EmprestimoamostraType', $emprestimoamostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('emprestimoamostra_edit', array('id' => $emprestimoamostra->getId()));
        }

        return $this->render('emprestimoamostra/edit.html.twig', array(
            'emprestimoamostra' => $emprestimoamostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a emprestimoamostra entity.
     *
     * @Route("/{id}", name="emprestimoamostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Emprestimoamostra $emprestimoamostra)
    {
        $form = $this->createDeleteForm($emprestimoamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($emprestimoamostra);
            $em->flush($emprestimoamostra);
        }

        return $this->redirectToRoute('emprestimoamostra_index');
    }

    /**
     * Creates a form to delete a emprestimoamostra entity.
     *
     * @param Emprestimoamostra $emprestimoamostra The emprestimoamostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Emprestimoamostra $emprestimoamostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('emprestimoamostra_delete', array('id' => $emprestimoamostra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
