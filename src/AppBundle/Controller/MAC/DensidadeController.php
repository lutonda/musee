<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Densidade;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Densidade controller.
 *
 * @Route("densidade")
 */
class DensidadeController extends Controller
{
    /**
     * Lists all densidade entities.
     *
     * @Route("/", name="densidade_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $densidades = $em->getRepository('AppBundle:Densidade')->findAll();

        return $this->render('densidade/index.html.twig', array(
            'densidades' => $densidades,
        ));
    }

    /**
     * Creates a new densidade entity.
     *
     * @Route("/new", name="densidade_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $densidade = new Densidade();
        $form = $this->createForm('AppBundle\Form\DensidadeType', $densidade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($densidade);
            $em->flush($densidade);

            return $this->redirectToRoute('densidade_show', array('id' => $densidade->getId()));
        }

        return $this->render('densidade/new.html.twig', array(
            'densidade' => $densidade,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a densidade entity.
     *
     * @Route("/{id}", name="densidade_show")
     * @Method("GET")
     */
    public function showAction(Densidade $densidade)
    {
        $deleteForm = $this->createDeleteForm($densidade);

        return $this->render('densidade/show.html.twig', array(
            'densidade' => $densidade,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing densidade entity.
     *
     * @Route("/{id}/edit", name="densidade_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Densidade $densidade)
    {
        $deleteForm = $this->createDeleteForm($densidade);
        $editForm = $this->createForm('AppBundle\Form\DensidadeType', $densidade);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('densidade_edit', array('id' => $densidade->getId()));
        }

        return $this->render('densidade/edit.html.twig', array(
            'densidade' => $densidade,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a densidade entity.
     *
     * @Route("/{id}", name="densidade_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Densidade $densidade)
    {
        $form = $this->createDeleteForm($densidade);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($densidade);
            $em->flush($densidade);
        }

        return $this->redirectToRoute('densidade_index');
    }

    /**
     * Creates a form to delete a densidade entity.
     *
     * @param Densidade $densidade The densidade entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Densidade $densidade)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('densidade_delete', array('id' => $densidade->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
