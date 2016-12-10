<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Fratura;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Fratura controller.
 *
 * @Route("fratura")
 */
class FraturaController extends Controller
{
    /**
     * Lists all fratura entities.
     *
     * @Route("/", name="fratura_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fraturas = $em->getRepository('AppBundle:Fratura')->findAll();

        return $this->render('fratura/index.html.twig', array(
            'fraturas' => $fraturas,
        ));
    }

    /**
     * Creates a new fratura entity.
     *
     * @Route("/new", name="fratura_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fratura = new Fratura();
        $form = $this->createForm('AppBundle\Form\FraturaType', $fratura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fratura);
            $em->flush($fratura);

            return $this->redirectToRoute('fratura_show', array('id' => $fratura->getId()));
        }

        return $this->render('fratura/new.html.twig', array(
            'fratura' => $fratura,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fratura entity.
     *
     * @Route("/{id}", name="fratura_show")
     * @Method("GET")
     */
    public function showAction(Fratura $fratura)
    {
        $deleteForm = $this->createDeleteForm($fratura);

        return $this->render('fratura/show.html.twig', array(
            'fratura' => $fratura,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fratura entity.
     *
     * @Route("/{id}/edit", name="fratura_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Fratura $fratura)
    {
        $deleteForm = $this->createDeleteForm($fratura);
        $editForm = $this->createForm('AppBundle\Form\FraturaType', $fratura);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fratura_edit', array('id' => $fratura->getId()));
        }

        return $this->render('fratura/edit.html.twig', array(
            'fratura' => $fratura,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fratura entity.
     *
     * @Route("/{id}", name="fratura_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Fratura $fratura)
    {
        $form = $this->createDeleteForm($fratura);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fratura);
            $em->flush($fratura);
        }

        return $this->redirectToRoute('fratura_index');
    }

    /**
     * Creates a form to delete a fratura entity.
     *
     * @param Fratura $fratura The fratura entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fratura $fratura)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fratura_delete', array('id' => $fratura->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
