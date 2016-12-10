<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Genese;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Genese controller.
 *
 * @Route("genese")
 */
class GeneseController extends Controller
{
    /**
     * Lists all genese entities.
     *
     * @Route("/", name="genese_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $genese = $em->getRepository('AppBundle:Genese')->findAll();

        return $this->render('genese/index.html.twig', array(
            'genese' => $genese,
        ));
    }

    /**
     * Creates a new genese entity.
     *
     * @Route("/new", name="genese_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $genese = new Genese();
        $form = $this->createForm('AppBundle\Form\GeneseType', $genese);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($genese);
            $em->flush($genese);

            return $this->redirectToRoute('genese_show', array('id' => $genese->getId()));
        }

        return $this->render('genese/new.html.twig', array(
            'genese' => $genese,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a genese entity.
     *
     * @Route("/{id}", name="genese_show")
     * @Method("GET")
     */
    public function showAction(Genese $genese)
    {
        $deleteForm = $this->createDeleteForm($genese);

        return $this->render('genese/show.html.twig', array(
            'genese' => $genese,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing genese entity.
     *
     * @Route("/{id}/edit", name="genese_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Genese $genese)
    {
        $deleteForm = $this->createDeleteForm($genese);
        $editForm = $this->createForm('AppBundle\Form\GeneseType', $genese);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('genese_edit', array('id' => $genese->getId()));
        }

        return $this->render('genese/edit.html.twig', array(
            'genese' => $genese,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a genese entity.
     *
     * @Route("/{id}", name="genese_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Genese $genese)
    {
        $form = $this->createDeleteForm($genese);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($genese);
            $em->flush($genese);
        }

        return $this->redirectToRoute('genese_index');
    }

    /**
     * Creates a form to delete a genese entity.
     *
     * @param Genese $genese The genese entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Genese $genese)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('genese_delete', array('id' => $genese->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
