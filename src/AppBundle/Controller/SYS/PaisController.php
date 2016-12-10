<?php

namespace AppBundle\Controller\SYS;

use AppBundle\Data\SYS\Pais;
use AppBundle\Domain\SYS\PaisRepositorio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Pai controller.
 *
 * @Route("/pais")
 */
class PaisController extends Controller
{
    /**
     * Lists all pai entities.
     *
     * @Route("/", name="pais_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $pais = new PaisRepositorio($em);
        $pais=$pais->mostrarTodos();
        return $this->render('pais/index.html.twig', array(
            'pais' => $pais,
        ));
    }

    /**
     * Creates a new pai entity.
     *
     * @Route("/new", name="pais_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pai = new Data\SYS\Pais();
        $form = $this->createForm('AppBundle\Application\SYS\PaisType', $pai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pai);
            $em->flush($pai);

            return $this->redirectToRoute('pais_show', array('id' => $pai->getId()));
        }

        return $this->render('pais/new.html.twig', array(
            'pai' => $pai,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pai entity.
     *
     * @Route("/{id}", name="pais_show")
     * @Method("GET")
     */
    public function showAction(Pais $pai)
    {
        $deleteForm = $this->createDeleteForm($pai);

        return $this->render('pais/show.html.twig', array(
            'pai' => $pai,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pai entity.
     *
     * @Route("/pais/{id}/edit", name="pais_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, SYS\Pais $pai)
    {
        $deleteForm = $this->createDeleteForm($pai);
        $editForm = $this->createForm('AppBundle\Application\SYS\PaisType', $pai);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pais_edit', array('id' => $pai->getId()));
        }

        return $this->render('pais/edit.html.twig', array(
            'pai' => $pai,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pai entity.
     *
     * @Route("/{id}", name="pais_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Entity\Pais $pai)
    {
        $form = $this->createDeleteForm($pai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pai);
            $em->flush($pai);
        }

        return $this->redirectToRoute('pais_index');
    }

    /**
     * Creates a form to delete a pai entity.
     *
     * @param Pais $pai The pai entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pais $pai)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pais_delete', array('id' => $pai->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
