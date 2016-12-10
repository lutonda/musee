<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Doacao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Doacao controller.
 *
 * @Route("doacao")
 */
class DoacaoController extends Controller
{
    /**
     * Lists all doacao entities.
     *
     * @Route("/", name="doacao_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $doacaos = $em->getRepository('AppBundle:Doacao')->findAll();

        return $this->render('doacao/index.html.twig', array(
            'doacaos' => $doacaos,
        ));
    }

    /**
     * Creates a new doacao entity.
     *
     * @Route("/new", name="doacao_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $doacao = new Doacao();
        $form = $this->createForm('AppBundle\Form\DoacaoType', $doacao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($doacao);
            $em->flush($doacao);

            return $this->redirectToRoute('doacao_show', array('id' => $doacao->getId()));
        }

        return $this->render('doacao/new.html.twig', array(
            'doacao' => $doacao,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a doacao entity.
     *
     * @Route("/{id}", name="doacao_show")
     * @Method("GET")
     */
    public function showAction(Doacao $doacao)
    {
        $deleteForm = $this->createDeleteForm($doacao);

        return $this->render('doacao/show.html.twig', array(
            'doacao' => $doacao,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing doacao entity.
     *
     * @Route("/{id}/edit", name="doacao_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Doacao $doacao)
    {
        $deleteForm = $this->createDeleteForm($doacao);
        $editForm = $this->createForm('AppBundle\Form\DoacaoType', $doacao);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('doacao_edit', array('id' => $doacao->getId()));
        }

        return $this->render('doacao/edit.html.twig', array(
            'doacao' => $doacao,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a doacao entity.
     *
     * @Route("/{id}", name="doacao_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Doacao $doacao)
    {
        $form = $this->createDeleteForm($doacao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($doacao);
            $em->flush($doacao);
        }

        return $this->redirectToRoute('doacao_index');
    }

    /**
     * Creates a form to delete a doacao entity.
     *
     * @param Doacao $doacao The doacao entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Doacao $doacao)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('doacao_delete', array('id' => $doacao->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
