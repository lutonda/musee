<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Ocorencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Ocorencium controller.
 *
 * @Route("ocorencia")
 */
class OcorenciaController extends Controller
{
    /**
     * Lists all ocorencium entities.
     *
     * @Route("/", name="ocorencia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ocorencias = $em->getRepository('AppBundle:Ocorencia')->findAll();

        return $this->render('ocorencia/index.html.twig', array(
            'ocorencias' => $ocorencias,
        ));
    }

    /**
     * Creates a new ocorencium entity.
     *
     * @Route("/new", name="ocorencia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ocorencium = new Ocorencium();
        $form = $this->createForm('AppBundle\Form\OcorenciaType', $ocorencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ocorencium);
            $em->flush($ocorencium);

            return $this->redirectToRoute('ocorencia_show', array('id' => $ocorencium->getId()));
        }

        return $this->render('ocorencia/new.html.twig', array(
            'ocorencium' => $ocorencium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ocorencium entity.
     *
     * @Route("/{id}", name="ocorencia_show")
     * @Method("GET")
     */
    public function showAction(Ocorencia $ocorencium)
    {
        $deleteForm = $this->createDeleteForm($ocorencium);

        return $this->render('ocorencia/show.html.twig', array(
            'ocorencium' => $ocorencium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ocorencium entity.
     *
     * @Route("/{id}/edit", name="ocorencia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ocorencia $ocorencium)
    {
        $deleteForm = $this->createDeleteForm($ocorencium);
        $editForm = $this->createForm('AppBundle\Form\OcorenciaType', $ocorencium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ocorencia_edit', array('id' => $ocorencium->getId()));
        }

        return $this->render('ocorencia/edit.html.twig', array(
            'ocorencium' => $ocorencium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ocorencium entity.
     *
     * @Route("/{id}", name="ocorencia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ocorencia $ocorencium)
    {
        $form = $this->createDeleteForm($ocorencium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ocorencium);
            $em->flush($ocorencium);
        }

        return $this->redirectToRoute('ocorencia_index');
    }

    /**
     * Creates a form to delete a ocorencium entity.
     *
     * @param Ocorencia $ocorencium The ocorencium entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ocorencia $ocorencium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ocorencia_delete', array('id' => $ocorencium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
