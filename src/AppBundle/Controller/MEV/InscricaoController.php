<?php

namespace AppBundle\Controller\MEV;

use AppBundle\Entity\Inscricao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Inscricao controller.
 *
 * @Route("inscricao")
 */
class InscricaoController extends Controller
{
    /**
     * Lists all inscricao entities.
     *
     * @Route("/", name="inscricao_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $inscricaos = $em->getRepository('AppBundle:Inscricao')->findAll();

        return $this->render('inscricao/index.html.twig', array(
            'inscricaos' => $inscricaos,
        ));
    }

    /**
     * Creates a new inscricao entity.
     *
     * @Route("/new", name="inscricao_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $inscricao = new Inscricao();
        $form = $this->createForm('AppBundle\Form\InscricaoType', $inscricao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscricao);
            $em->flush($inscricao);

            return $this->redirectToRoute('inscricao_show', array('id' => $inscricao->getId()));
        }

        return $this->render('inscricao/new.html.twig', array(
            'inscricao' => $inscricao,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a inscricao entity.
     *
     * @Route("/{id}", name="inscricao_show")
     * @Method("GET")
     */
    public function showAction(Inscricao $inscricao)
    {
        $deleteForm = $this->createDeleteForm($inscricao);

        return $this->render('inscricao/show.html.twig', array(
            'inscricao' => $inscricao,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing inscricao entity.
     *
     * @Route("/{id}/edit", name="inscricao_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Inscricao $inscricao)
    {
        $deleteForm = $this->createDeleteForm($inscricao);
        $editForm = $this->createForm('AppBundle\Form\InscricaoType', $inscricao);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('inscricao_edit', array('id' => $inscricao->getId()));
        }

        return $this->render('inscricao/edit.html.twig', array(
            'inscricao' => $inscricao,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a inscricao entity.
     *
     * @Route("/{id}", name="inscricao_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Inscricao $inscricao)
    {
        $form = $this->createDeleteForm($inscricao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($inscricao);
            $em->flush($inscricao);
        }

        return $this->redirectToRoute('inscricao_index');
    }

    /**
     * Creates a form to delete a inscricao entity.
     *
     * @param Inscricao $inscricao The inscricao entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Inscricao $inscricao)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inscricao_delete', array('id' => $inscricao->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
