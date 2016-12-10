<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Habitoamostra;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Habitoamostra controller.
 *
 * @Route("habitoamostra")
 */
class HabitoamostraController extends Controller
{
    /**
     * Lists all habitoamostra entities.
     *
     * @Route("/", name="habitoamostra_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habitoamostras = $em->getRepository('AppBundle:Habitoamostra')->findAll();

        return $this->render('habitoamostra/index.html.twig', array(
            'habitoamostras' => $habitoamostras,
        ));
    }

    /**
     * Creates a new habitoamostra entity.
     *
     * @Route("/new", name="habitoamostra_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $habitoamostra = new Habitoamostra();
        $form = $this->createForm('AppBundle\Form\HabitoamostraType', $habitoamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($habitoamostra);
            $em->flush($habitoamostra);

            return $this->redirectToRoute('habitoamostra_show', array('id' => $habitoamostra->getId()));
        }

        return $this->render('habitoamostra/new.html.twig', array(
            'habitoamostra' => $habitoamostra,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a habitoamostra entity.
     *
     * @Route("/{id}", name="habitoamostra_show")
     * @Method("GET")
     */
    public function showAction(Habitoamostra $habitoamostra)
    {
        $deleteForm = $this->createDeleteForm($habitoamostra);

        return $this->render('habitoamostra/show.html.twig', array(
            'habitoamostra' => $habitoamostra,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing habitoamostra entity.
     *
     * @Route("/{id}/edit", name="habitoamostra_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Habitoamostra $habitoamostra)
    {
        $deleteForm = $this->createDeleteForm($habitoamostra);
        $editForm = $this->createForm('AppBundle\Form\HabitoamostraType', $habitoamostra);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('habitoamostra_edit', array('id' => $habitoamostra->getId()));
        }

        return $this->render('habitoamostra/edit.html.twig', array(
            'habitoamostra' => $habitoamostra,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a habitoamostra entity.
     *
     * @Route("/{id}", name="habitoamostra_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Habitoamostra $habitoamostra)
    {
        $form = $this->createDeleteForm($habitoamostra);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($habitoamostra);
            $em->flush($habitoamostra);
        }

        return $this->redirectToRoute('habitoamostra_index');
    }

    /**
     * Creates a form to delete a habitoamostra entity.
     *
     * @param Habitoamostra $habitoamostra The habitoamostra entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Habitoamostra $habitoamostra)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('habitoamostra_delete', array('id' => $habitoamostra->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
