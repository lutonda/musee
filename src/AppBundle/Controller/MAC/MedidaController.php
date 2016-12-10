<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Medida;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Medida controller.
 *
 * @Route("medida")
 */
class MedidaController extends Controller
{
    /**
     * Lists all medida entities.
     *
     * @Route("/", name="medida_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $medidas = $em->getRepository('AppBundle:Medida')->findAll();

        return $this->render('medida/index.html.twig', array(
            'medidas' => $medidas,
        ));
    }

    /**
     * Creates a new medida entity.
     *
     * @Route("/new", name="medida_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $medida = new Medida();
        $form = $this->createForm('AppBundle\Form\MedidaType', $medida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($medida);
            $em->flush($medida);

            return $this->redirectToRoute('medida_show', array('id' => $medida->getId()));
        }

        return $this->render('medida/new.html.twig', array(
            'medida' => $medida,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a medida entity.
     *
     * @Route("/{id}", name="medida_show")
     * @Method("GET")
     */
    public function showAction(Medida $medida)
    {
        $deleteForm = $this->createDeleteForm($medida);

        return $this->render('medida/show.html.twig', array(
            'medida' => $medida,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing medida entity.
     *
     * @Route("/{id}/edit", name="medida_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Medida $medida)
    {
        $deleteForm = $this->createDeleteForm($medida);
        $editForm = $this->createForm('AppBundle\Form\MedidaType', $medida);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('medida_edit', array('id' => $medida->getId()));
        }

        return $this->render('medida/edit.html.twig', array(
            'medida' => $medida,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a medida entity.
     *
     * @Route("/{id}", name="medida_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Medida $medida)
    {
        $form = $this->createDeleteForm($medida);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($medida);
            $em->flush($medida);
        }

        return $this->redirectToRoute('medida_index');
    }

    /**
     * Creates a form to delete a medida entity.
     *
     * @param Medida $medida The medida entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Medida $medida)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('medida_delete', array('id' => $medida->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
