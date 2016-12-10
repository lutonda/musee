<?php

namespace AppBundle\Controller\MEV;

use AppBundle\Entity\Grupo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Grupo controller.
 *
 * @Route("grupo")
 */
class GrupoController extends Controller
{
    /**
     * Lists all grupo entities.
     *
     * @Route("/", name="grupo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $grupos = $em->getRepository('AppBundle:Grupo')->findAll();

        return $this->render('grupo/index.html.twig', array(
            'grupos' => $grupos,
        ));
    }

    /**
     * Creates a new grupo entity.
     *
     * @Route("/new", name="grupo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $grupo = new Grupo();
        $form = $this->createForm('AppBundle\Form\GrupoType', $grupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($grupo);
            $em->flush($grupo);

            return $this->redirectToRoute('grupo_show', array('id' => $grupo->getId()));
        }

        return $this->render('grupo/new.html.twig', array(
            'grupo' => $grupo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a grupo entity.
     *
     * @Route("/{id}", name="grupo_show")
     * @Method("GET")
     */
    public function showAction(Grupo $grupo)
    {
        $deleteForm = $this->createDeleteForm($grupo);

        return $this->render('grupo/show.html.twig', array(
            'grupo' => $grupo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing grupo entity.
     *
     * @Route("/{id}/edit", name="grupo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Grupo $grupo)
    {
        $deleteForm = $this->createDeleteForm($grupo);
        $editForm = $this->createForm('AppBundle\Form\GrupoType', $grupo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('grupo_edit', array('id' => $grupo->getId()));
        }

        return $this->render('grupo/edit.html.twig', array(
            'grupo' => $grupo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a grupo entity.
     *
     * @Route("/{id}", name="grupo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Grupo $grupo)
    {
        $form = $this->createDeleteForm($grupo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($grupo);
            $em->flush($grupo);
        }

        return $this->redirectToRoute('grupo_index');
    }

    /**
     * Creates a form to delete a grupo entity.
     *
     * @param Grupo $grupo The grupo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Grupo $grupo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('grupo_delete', array('id' => $grupo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
