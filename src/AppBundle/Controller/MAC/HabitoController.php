<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Habito;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Habito controller.
 *
 * @Route("habito")
 */
class HabitoController extends Controller
{
    /**
     * Lists all habito entities.
     *
     * @Route("/", name="habito_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habitos = $em->getRepository('AppBundle:Habito')->findAll();

        return $this->render('habito/index.html.twig', array(
            'habitos' => $habitos,
        ));
    }

    /**
     * Creates a new habito entity.
     *
     * @Route("/new", name="habito_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $habito = new Habito();
        $form = $this->createForm('AppBundle\Form\HabitoType', $habito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($habito);
            $em->flush($habito);

            return $this->redirectToRoute('habito_show', array('id' => $habito->getId()));
        }

        return $this->render('habito/new.html.twig', array(
            'habito' => $habito,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a habito entity.
     *
     * @Route("/{id}", name="habito_show")
     * @Method("GET")
     */
    public function showAction(Habito $habito)
    {
        $deleteForm = $this->createDeleteForm($habito);

        return $this->render('habito/show.html.twig', array(
            'habito' => $habito,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing habito entity.
     *
     * @Route("/{id}/edit", name="habito_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Habito $habito)
    {
        $deleteForm = $this->createDeleteForm($habito);
        $editForm = $this->createForm('AppBundle\Form\HabitoType', $habito);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('habito_edit', array('id' => $habito->getId()));
        }

        return $this->render('habito/edit.html.twig', array(
            'habito' => $habito,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a habito entity.
     *
     * @Route("/{id}", name="habito_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Habito $habito)
    {
        $form = $this->createDeleteForm($habito);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($habito);
            $em->flush($habito);
        }

        return $this->redirectToRoute('habito_index');
    }

    /**
     * Creates a form to delete a habito entity.
     *
     * @param Habito $habito The habito entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Habito $habito)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('habito_delete', array('id' => $habito->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
