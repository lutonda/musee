<?php

namespace AppBundle\Controller\MEV;

use AppBundle\Entity\Categoriaevento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Categoriaevento controller.
 *
 * @Route("categoriaevento")
 */
class CategoriaeventoController extends Controller
{
    /**
     * Lists all categoriaevento entities.
     *
     * @Route("/", name="categoriaevento_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categoriaeventos = $em->getRepository('AppBundle:Categoriaevento')->findAll();

        return $this->render('categoriaevento/index.html.twig', array(
            'categoriaeventos' => $categoriaeventos,
        ));
    }

    /**
     * Creates a new categoriaevento entity.
     *
     * @Route("/new", name="categoriaevento_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $categoriaevento = new Categoriaevento();
        $form = $this->createForm('AppBundle\Form\CategoriaeventoType', $categoriaevento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoriaevento);
            $em->flush($categoriaevento);

            return $this->redirectToRoute('categoriaevento_show', array('id' => $categoriaevento->getId()));
        }

        return $this->render('categoriaevento/new.html.twig', array(
            'categoriaevento' => $categoriaevento,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categoriaevento entity.
     *
     * @Route("/{id}", name="categoriaevento_show")
     * @Method("GET")
     */
    public function showAction(Categoriaevento $categoriaevento)
    {
        $deleteForm = $this->createDeleteForm($categoriaevento);

        return $this->render('categoriaevento/show.html.twig', array(
            'categoriaevento' => $categoriaevento,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categoriaevento entity.
     *
     * @Route("/{id}/edit", name="categoriaevento_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Categoriaevento $categoriaevento)
    {
        $deleteForm = $this->createDeleteForm($categoriaevento);
        $editForm = $this->createForm('AppBundle\Form\CategoriaeventoType', $categoriaevento);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categoriaevento_edit', array('id' => $categoriaevento->getId()));
        }

        return $this->render('categoriaevento/edit.html.twig', array(
            'categoriaevento' => $categoriaevento,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categoriaevento entity.
     *
     * @Route("/{id}", name="categoriaevento_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Categoriaevento $categoriaevento)
    {
        $form = $this->createDeleteForm($categoriaevento);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categoriaevento);
            $em->flush($categoriaevento);
        }

        return $this->redirectToRoute('categoriaevento_index');
    }

    /**
     * Creates a form to delete a categoriaevento entity.
     *
     * @param Categoriaevento $categoriaevento The categoriaevento entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categoriaevento $categoriaevento)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoriaevento_delete', array('id' => $categoriaevento->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
