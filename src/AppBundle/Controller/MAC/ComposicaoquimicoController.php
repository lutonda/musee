<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Composicaoquimico;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Composicaoquimico controller.
 *
 * @Route("composicaoquimico")
 */
class ComposicaoquimicoController extends Controller
{
    /**
     * Lists all composicaoquimico entities.
     *
     * @Route("/", name="composicaoquimico_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $composicaoquimicos = $em->getRepository('AppBundle:Composicaoquimico')->findAll();

        return $this->render('composicaoquimico/index.html.twig', array(
            'composicaoquimicos' => $composicaoquimicos,
        ));
    }

    /**
     * Creates a new composicaoquimico entity.
     *
     * @Route("/new", name="composicaoquimico_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $composicaoquimico = new Composicaoquimico();
        $form = $this->createForm('AppBundle\Form\ComposicaoquimicoType', $composicaoquimico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($composicaoquimico);
            $em->flush($composicaoquimico);

            return $this->redirectToRoute('composicaoquimico_show', array('id' => $composicaoquimico->getId()));
        }

        return $this->render('composicaoquimico/new.html.twig', array(
            'composicaoquimico' => $composicaoquimico,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a composicaoquimico entity.
     *
     * @Route("/{id}", name="composicaoquimico_show")
     * @Method("GET")
     */
    public function showAction(Composicaoquimico $composicaoquimico)
    {
        $deleteForm = $this->createDeleteForm($composicaoquimico);

        return $this->render('composicaoquimico/show.html.twig', array(
            'composicaoquimico' => $composicaoquimico,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing composicaoquimico entity.
     *
     * @Route("/{id}/edit", name="composicaoquimico_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Composicaoquimico $composicaoquimico)
    {
        $deleteForm = $this->createDeleteForm($composicaoquimico);
        $editForm = $this->createForm('AppBundle\Form\ComposicaoquimicoType', $composicaoquimico);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('composicaoquimico_edit', array('id' => $composicaoquimico->getId()));
        }

        return $this->render('composicaoquimico/edit.html.twig', array(
            'composicaoquimico' => $composicaoquimico,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a composicaoquimico entity.
     *
     * @Route("/{id}", name="composicaoquimico_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Composicaoquimico $composicaoquimico)
    {
        $form = $this->createDeleteForm($composicaoquimico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($composicaoquimico);
            $em->flush($composicaoquimico);
        }

        return $this->redirectToRoute('composicaoquimico_index');
    }

    /**
     * Creates a form to delete a composicaoquimico entity.
     *
     * @param Composicaoquimico $composicaoquimico The composicaoquimico entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Composicaoquimico $composicaoquimico)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('composicaoquimico_delete', array('id' => $composicaoquimico->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
