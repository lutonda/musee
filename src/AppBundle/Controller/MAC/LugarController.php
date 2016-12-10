<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Lugar;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Lugar controller.
 *
 * @Route("lugar")
 */
class LugarController extends Controller
{
    /**
     * Lists all lugar entities.
     *
     * @Route("/", name="lugar_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lugars = $em->getRepository('AppBundle:Lugar')->findAll();

        return $this->render('lugar/index.html.twig', array(
            'lugars' => $lugars,
        ));
    }

    /**
     * Creates a new lugar entity.
     *
     * @Route("/new", name="lugar_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $lugar = new Lugar();
        $form = $this->createForm('AppBundle\Form\LugarType', $lugar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lugar);
            $em->flush($lugar);

            return $this->redirectToRoute('lugar_show', array('id' => $lugar->getId()));
        }

        return $this->render('lugar/new.html.twig', array(
            'lugar' => $lugar,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a lugar entity.
     *
     * @Route("/{id}", name="lugar_show")
     * @Method("GET")
     */
    public function showAction(Lugar $lugar)
    {
        $deleteForm = $this->createDeleteForm($lugar);

        return $this->render('lugar/show.html.twig', array(
            'lugar' => $lugar,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing lugar entity.
     *
     * @Route("/{id}/edit", name="lugar_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Lugar $lugar)
    {
        $deleteForm = $this->createDeleteForm($lugar);
        $editForm = $this->createForm('AppBundle\Form\LugarType', $lugar);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lugar_edit', array('id' => $lugar->getId()));
        }

        return $this->render('lugar/edit.html.twig', array(
            'lugar' => $lugar,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a lugar entity.
     *
     * @Route("/{id}", name="lugar_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Lugar $lugar)
    {
        $form = $this->createDeleteForm($lugar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lugar);
            $em->flush($lugar);
        }

        return $this->redirectToRoute('lugar_index');
    }

    /**
     * Creates a form to delete a lugar entity.
     *
     * @param Lugar $lugar The lugar entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lugar $lugar)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lugar_delete', array('id' => $lugar->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
