<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Cor;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Cor controller.
 *
 * @Route("cor")
 */
class CorController extends Controller
{
    /**
     * Lists all cor entities.
     *
     * @Route("/", name="cor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cors = $em->getRepository('AppBundle:Cor')->findAll();

        return $this->render('cor/index.html.twig', array(
            'cors' => $cors,
        ));
    }

    /**
     * Creates a new cor entity.
     *
     * @Route("/new", name="cor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $cor = new Cor();
        $form = $this->createForm('AppBundle\Form\CorType', $cor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cor);
            $em->flush($cor);

            return $this->redirectToRoute('cor_show', array('id' => $cor->getId()));
        }

        return $this->render('cor/new.html.twig', array(
            'cor' => $cor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cor entity.
     *
     * @Route("/{id}", name="cor_show")
     * @Method("GET")
     */
    public function showAction(Cor $cor)
    {
        $deleteForm = $this->createDeleteForm($cor);

        return $this->render('cor/show.html.twig', array(
            'cor' => $cor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cor entity.
     *
     * @Route("/{id}/edit", name="cor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cor $cor)
    {
        $deleteForm = $this->createDeleteForm($cor);
        $editForm = $this->createForm('AppBundle\Form\CorType', $cor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cor_edit', array('id' => $cor->getId()));
        }

        return $this->render('cor/edit.html.twig', array(
            'cor' => $cor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a cor entity.
     *
     * @Route("/{id}", name="cor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cor $cor)
    {
        $form = $this->createDeleteForm($cor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cor);
            $em->flush($cor);
        }

        return $this->redirectToRoute('cor_index');
    }

    /**
     * Creates a form to delete a cor entity.
     *
     * @param Cor $cor The cor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cor $cor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cor_delete', array('id' => $cor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
