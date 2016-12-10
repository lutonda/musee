<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Conservavao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Conservavao controller.
 *
 * @Route("conservavao")
 */
class ConservavaoController extends Controller
{
    /**
     * Lists all conservavao entities.
     *
     * @Route("/", name="conservavao_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $conservavaos = $em->getRepository('AppBundle:Conservavao')->findAll();

        return $this->render('conservavao/index.html.twig', array(
            'conservavaos' => $conservavaos,
        ));
    }

    /**
     * Creates a new conservavao entity.
     *
     * @Route("/new", name="conservavao_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $conservavao = new Conservavao();
        $form = $this->createForm('AppBundle\Form\ConservavaoType', $conservavao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($conservavao);
            $em->flush($conservavao);

            return $this->redirectToRoute('conservavao_show', array('id' => $conservavao->getId()));
        }

        return $this->render('conservavao/new.html.twig', array(
            'conservavao' => $conservavao,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a conservavao entity.
     *
     * @Route("/{id}", name="conservavao_show")
     * @Method("GET")
     */
    public function showAction(Conservavao $conservavao)
    {
        $deleteForm = $this->createDeleteForm($conservavao);

        return $this->render('conservavao/show.html.twig', array(
            'conservavao' => $conservavao,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing conservavao entity.
     *
     * @Route("/{id}/edit", name="conservavao_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Conservavao $conservavao)
    {
        $deleteForm = $this->createDeleteForm($conservavao);
        $editForm = $this->createForm('AppBundle\Form\ConservavaoType', $conservavao);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('conservavao_edit', array('id' => $conservavao->getId()));
        }

        return $this->render('conservavao/edit.html.twig', array(
            'conservavao' => $conservavao,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a conservavao entity.
     *
     * @Route("/{id}", name="conservavao_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Conservavao $conservavao)
    {
        $form = $this->createDeleteForm($conservavao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($conservavao);
            $em->flush($conservavao);
        }

        return $this->redirectToRoute('conservavao_index');
    }

    /**
     * Creates a form to delete a conservavao entity.
     *
     * @param Conservavao $conservavao The conservavao entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Conservavao $conservavao)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('conservavao_delete', array('id' => $conservavao->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
