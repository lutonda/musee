<?php

namespace AppBundle\Controller\MUS;

use AppBundle\Entity\Tipocontacto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tipocontacto controller.
 *
 * @Route("tipocontacto")
 */
class TipocontactoController extends Controller
{
    /**
     * Lists all tipocontacto entities.
     *
     * @Route("/", name="tipocontacto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tipocontactos = $em->getRepository('AppBundle:Tipocontacto')->findAll();

        return $this->render('tipocontacto/index.html.twig', array(
            'tipocontactos' => $tipocontactos,
        ));
    }

    /**
     * Creates a new tipocontacto entity.
     *
     * @Route("/new", name="tipocontacto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tipocontacto = new Tipocontacto();
        $form = $this->createForm('AppBundle\Form\TipocontactoType', $tipocontacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipocontacto);
            $em->flush($tipocontacto);

            return $this->redirectToRoute('tipocontacto_show', array('id' => $tipocontacto->getId()));
        }

        return $this->render('tipocontacto/new.html.twig', array(
            'tipocontacto' => $tipocontacto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tipocontacto entity.
     *
     * @Route("/{id}", name="tipocontacto_show")
     * @Method("GET")
     */
    public function showAction(Tipocontacto $tipocontacto)
    {
        $deleteForm = $this->createDeleteForm($tipocontacto);

        return $this->render('tipocontacto/show.html.twig', array(
            'tipocontacto' => $tipocontacto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tipocontacto entity.
     *
     * @Route("/{id}/edit", name="tipocontacto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tipocontacto $tipocontacto)
    {
        $deleteForm = $this->createDeleteForm($tipocontacto);
        $editForm = $this->createForm('AppBundle\Form\TipocontactoType', $tipocontacto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipocontacto_edit', array('id' => $tipocontacto->getId()));
        }

        return $this->render('tipocontacto/edit.html.twig', array(
            'tipocontacto' => $tipocontacto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tipocontacto entity.
     *
     * @Route("/{id}", name="tipocontacto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tipocontacto $tipocontacto)
    {
        $form = $this->createDeleteForm($tipocontacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipocontacto);
            $em->flush($tipocontacto);
        }

        return $this->redirectToRoute('tipocontacto_index');
    }

    /**
     * Creates a form to delete a tipocontacto entity.
     *
     * @param Tipocontacto $tipocontacto The tipocontacto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tipocontacto $tipocontacto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipocontacto_delete', array('id' => $tipocontacto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
