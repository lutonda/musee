<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Colaborador;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Colaborador controller.
 *
 * @Route("colaborador")
 */
class ColaboradorController extends Controller
{
    /**
     * Lists all colaborador entities.
     *
     * @Route("/", name="colaborador_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $colaboradors = $em->getRepository('AppBundle:Colaborador')->findAll();

        return $this->render('colaborador/index.html.twig', array(
            'colaboradors' => $colaboradors,
        ));
    }

    /**
     * Creates a new colaborador entity.
     *
     * @Route("/new", name="colaborador_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $colaborador = new Colaborador();
        $form = $this->createForm('AppBundle\Form\ColaboradorType', $colaborador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($colaborador);
            $em->flush($colaborador);

            return $this->redirectToRoute('colaborador_show', array('id' => $colaborador->getId()));
        }

        return $this->render('colaborador/new.html.twig', array(
            'colaborador' => $colaborador,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a colaborador entity.
     *
     * @Route("/{id}", name="colaborador_show")
     * @Method("GET")
     */
    public function showAction(Colaborador $colaborador)
    {
        $deleteForm = $this->createDeleteForm($colaborador);

        return $this->render('colaborador/show.html.twig', array(
            'colaborador' => $colaborador,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing colaborador entity.
     *
     * @Route("/{id}/edit", name="colaborador_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Colaborador $colaborador)
    {
        $deleteForm = $this->createDeleteForm($colaborador);
        $editForm = $this->createForm('AppBundle\Form\ColaboradorType', $colaborador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('colaborador_edit', array('id' => $colaborador->getId()));
        }

        return $this->render('colaborador/edit.html.twig', array(
            'colaborador' => $colaborador,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a colaborador entity.
     *
     * @Route("/{id}", name="colaborador_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Colaborador $colaborador)
    {
        $form = $this->createDeleteForm($colaborador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($colaborador);
            $em->flush($colaborador);
        }

        return $this->redirectToRoute('colaborador_index');
    }

    /**
     * Creates a form to delete a colaborador entity.
     *
     * @param Colaborador $colaborador The colaborador entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Colaborador $colaborador)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('colaborador_delete', array('id' => $colaborador->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
