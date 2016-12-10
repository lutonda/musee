<?php

namespace AppBundle\Controller\MEV;

use AppBundle\Entity\Convitegrupo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Convitegrupo controller.
 *
 * @Route("convitegrupo")
 */
class ConvitegrupoController extends Controller
{
    /**
     * Lists all convitegrupo entities.
     *
     * @Route("/", name="convitegrupo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $convitegrupos = $em->getRepository('AppBundle:Convitegrupo')->findAll();

        return $this->render('convitegrupo/index.html.twig', array(
            'convitegrupos' => $convitegrupos,
        ));
    }

    /**
     * Creates a new convitegrupo entity.
     *
     * @Route("/new", name="convitegrupo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $convitegrupo = new Convitegrupo();
        $form = $this->createForm('AppBundle\Form\ConvitegrupoType', $convitegrupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($convitegrupo);
            $em->flush($convitegrupo);

            return $this->redirectToRoute('convitegrupo_show', array('id' => $convitegrupo->getId()));
        }

        return $this->render('convitegrupo/new.html.twig', array(
            'convitegrupo' => $convitegrupo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a convitegrupo entity.
     *
     * @Route("/{id}", name="convitegrupo_show")
     * @Method("GET")
     */
    public function showAction(Convitegrupo $convitegrupo)
    {
        $deleteForm = $this->createDeleteForm($convitegrupo);

        return $this->render('convitegrupo/show.html.twig', array(
            'convitegrupo' => $convitegrupo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing convitegrupo entity.
     *
     * @Route("/{id}/edit", name="convitegrupo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Convitegrupo $convitegrupo)
    {
        $deleteForm = $this->createDeleteForm($convitegrupo);
        $editForm = $this->createForm('AppBundle\Form\ConvitegrupoType', $convitegrupo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('convitegrupo_edit', array('id' => $convitegrupo->getId()));
        }

        return $this->render('convitegrupo/edit.html.twig', array(
            'convitegrupo' => $convitegrupo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a convitegrupo entity.
     *
     * @Route("/{id}", name="convitegrupo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Convitegrupo $convitegrupo)
    {
        $form = $this->createDeleteForm($convitegrupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($convitegrupo);
            $em->flush($convitegrupo);
        }

        return $this->redirectToRoute('convitegrupo_index');
    }

    /**
     * Creates a form to delete a convitegrupo entity.
     *
     * @param Convitegrupo $convitegrupo The convitegrupo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Convitegrupo $convitegrupo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('convitegrupo_delete', array('id' => $convitegrupo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
