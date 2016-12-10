<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Clivagem;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Clivagem controller.
 *
 * @Route("clivagem")
 */
class ClivagemController extends Controller
{
    /**
     * Lists all clivagem entities.
     *
     * @Route("/", name="clivagem_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clivagems = $em->getRepository('AppBundle:Clivagem')->findAll();

        return $this->render('clivagem/index.html.twig', array(
            'clivagems' => $clivagems,
        ));
    }

    /**
     * Creates a new clivagem entity.
     *
     * @Route("/new", name="clivagem_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $clivagem = new Clivagem();
        $form = $this->createForm('AppBundle\Form\ClivagemType', $clivagem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($clivagem);
            $em->flush($clivagem);

            return $this->redirectToRoute('clivagem_show', array('id' => $clivagem->getId()));
        }

        return $this->render('clivagem/new.html.twig', array(
            'clivagem' => $clivagem,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a clivagem entity.
     *
     * @Route("/{id}", name="clivagem_show")
     * @Method("GET")
     */
    public function showAction(Clivagem $clivagem)
    {
        $deleteForm = $this->createDeleteForm($clivagem);

        return $this->render('clivagem/show.html.twig', array(
            'clivagem' => $clivagem,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing clivagem entity.
     *
     * @Route("/{id}/edit", name="clivagem_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Clivagem $clivagem)
    {
        $deleteForm = $this->createDeleteForm($clivagem);
        $editForm = $this->createForm('AppBundle\Form\ClivagemType', $clivagem);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('clivagem_edit', array('id' => $clivagem->getId()));
        }

        return $this->render('clivagem/edit.html.twig', array(
            'clivagem' => $clivagem,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a clivagem entity.
     *
     * @Route("/{id}", name="clivagem_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Clivagem $clivagem)
    {
        $form = $this->createDeleteForm($clivagem);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($clivagem);
            $em->flush($clivagem);
        }

        return $this->redirectToRoute('clivagem_index');
    }

    /**
     * Creates a form to delete a clivagem entity.
     *
     * @param Clivagem $clivagem The clivagem entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Clivagem $clivagem)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('clivagem_delete', array('id' => $clivagem->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
