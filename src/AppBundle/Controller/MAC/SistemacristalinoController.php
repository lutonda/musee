<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Sistemacristalino;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Sistemacristalino controller.
 *
 * @Route("sistemacristalino")
 */
class SistemacristalinoController extends Controller
{
    /**
     * Lists all sistemacristalino entities.
     *
     * @Route("/", name="sistemacristalino_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sistemacristalinos = $em->getRepository('AppBundle:Sistemacristalino')->findAll();

        return $this->render('sistemacristalino/index.html.twig', array(
            'sistemacristalinos' => $sistemacristalinos,
        ));
    }

    /**
     * Creates a new sistemacristalino entity.
     *
     * @Route("/new", name="sistemacristalino_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sistemacristalino = new Sistemacristalino();
        $form = $this->createForm('AppBundle\Form\SistemacristalinoType', $sistemacristalino);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sistemacristalino);
            $em->flush($sistemacristalino);

            return $this->redirectToRoute('sistemacristalino_show', array('id' => $sistemacristalino->getId()));
        }

        return $this->render('sistemacristalino/new.html.twig', array(
            'sistemacristalino' => $sistemacristalino,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a sistemacristalino entity.
     *
     * @Route("/{id}", name="sistemacristalino_show")
     * @Method("GET")
     */
    public function showAction(Sistemacristalino $sistemacristalino)
    {
        $deleteForm = $this->createDeleteForm($sistemacristalino);

        return $this->render('sistemacristalino/show.html.twig', array(
            'sistemacristalino' => $sistemacristalino,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing sistemacristalino entity.
     *
     * @Route("/{id}/edit", name="sistemacristalino_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sistemacristalino $sistemacristalino)
    {
        $deleteForm = $this->createDeleteForm($sistemacristalino);
        $editForm = $this->createForm('AppBundle\Form\SistemacristalinoType', $sistemacristalino);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sistemacristalino_edit', array('id' => $sistemacristalino->getId()));
        }

        return $this->render('sistemacristalino/edit.html.twig', array(
            'sistemacristalino' => $sistemacristalino,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a sistemacristalino entity.
     *
     * @Route("/{id}", name="sistemacristalino_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sistemacristalino $sistemacristalino)
    {
        $form = $this->createDeleteForm($sistemacristalino);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sistemacristalino);
            $em->flush($sistemacristalino);
        }

        return $this->redirectToRoute('sistemacristalino_index');
    }

    /**
     * Creates a form to delete a sistemacristalino entity.
     *
     * @param Sistemacristalino $sistemacristalino The sistemacristalino entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sistemacristalino $sistemacristalino)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sistemacristalino_delete', array('id' => $sistemacristalino->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
