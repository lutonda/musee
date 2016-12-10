<?php

namespace AppBundle\Controller\MUS;

use AppBundle\Data\MUS\Curso;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Curso controller.
 *
 * @Route("curso")
 */
class CursoController extends Controller
{
    /**
     * Lists all curso entities.
     *
     * @Route("/", name="curso_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cursos = $em->getRepository('AppBundle:Curso')->findAll();

        return $this->render('curso/index.html.twig', array(
            'cursos' => $cursos,
        ));
    }

    /**
     * Creates a new curso entity.
     *
     * @Route("/new", name="curso_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $curso = new Curso();
        $form = $this->createForm('AppBundle\Form\CursoType', $curso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($curso);
            $em->flush($curso);

            return $this->redirectToRoute('curso_show', array('id' => $curso->getId()));
        }

        return $this->render('curso/new.html.twig', array(
            'curso' => $curso,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a curso entity.
     *
     * @Route("/{id}", name="curso_show")
     * @Method("GET")
     */
    public function showAction(Curso $curso)
    {
        $deleteForm = $this->createDeleteForm($curso);

        return $this->render('curso/show.html.twig', array(
            'curso' => $curso,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing curso entity.
     *
     * @Route("/{id}/edit", name="curso_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Curso $curso)
    {
        $deleteForm = $this->createDeleteForm($curso);
        $editForm = $this->createForm('AppBundle\Form\CursoType', $curso);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('curso_edit', array('id' => $curso->getId()));
        }

        return $this->render('curso/edit.html.twig', array(
            'curso' => $curso,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a curso entity.
     *
     * @Route("/{id}", name="curso_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Curso $curso)
    {
        $form = $this->createDeleteForm($curso);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($curso);
            $em->flush($curso);
        }

        return $this->redirectToRoute('curso_index');
    }

    /**
     * Creates a form to delete a curso entity.
     *
     * @param Curso $curso The curso entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Curso $curso)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('curso_delete', array('id' => $curso->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
