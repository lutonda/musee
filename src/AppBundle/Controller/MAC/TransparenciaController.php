<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Transparencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Transparencium controller.
 *
 * @Route("transparencia")
 */
class TransparenciaController extends Controller
{
    /**
     * Lists all transparencium entities.
     *
     * @Route("/", name="transparencia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $transparencias = $em->getRepository('AppBundle:Transparencia')->findAll();

        return $this->render('transparencia/index.html.twig', array(
            'transparencias' => $transparencias,
        ));
    }

    /**
     * Creates a new transparencium entity.
     *
     * @Route("/new", name="transparencia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $transparencium = new Transparencium();
        $form = $this->createForm('AppBundle\Form\TransparenciaType', $transparencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($transparencium);
            $em->flush($transparencium);

            return $this->redirectToRoute('transparencia_show', array('id' => $transparencium->getId()));
        }

        return $this->render('transparencia/new.html.twig', array(
            'transparencium' => $transparencium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a transparencium entity.
     *
     * @Route("/{id}", name="transparencia_show")
     * @Method("GET")
     */
    public function showAction(Transparencia $transparencium)
    {
        $deleteForm = $this->createDeleteForm($transparencium);

        return $this->render('transparencia/show.html.twig', array(
            'transparencium' => $transparencium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing transparencium entity.
     *
     * @Route("/{id}/edit", name="transparencia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Transparencia $transparencium)
    {
        $deleteForm = $this->createDeleteForm($transparencium);
        $editForm = $this->createForm('AppBundle\Form\TransparenciaType', $transparencium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('transparencia_edit', array('id' => $transparencium->getId()));
        }

        return $this->render('transparencia/edit.html.twig', array(
            'transparencium' => $transparencium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a transparencium entity.
     *
     * @Route("/{id}", name="transparencia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Transparencia $transparencium)
    {
        $form = $this->createDeleteForm($transparencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($transparencium);
            $em->flush($transparencium);
        }

        return $this->redirectToRoute('transparencia_index');
    }

    /**
     * Creates a form to delete a transparencium entity.
     *
     * @param Transparencia $transparencium The transparencium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Transparencia $transparencium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('transparencia_delete', array('id' => $transparencium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
