<?php

namespace AppBundle\Controller\MEV;

use AppBundle\Entity\Requisitoinscricao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Requisitoinscricao controller.
 *
 * @Route("requisitoinscricao")
 */
class RequisitoinscricaoController extends Controller
{
    /**
     * Lists all requisitoinscricao entities.
     *
     * @Route("/", name="requisitoinscricao_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $requisitoinscricaos = $em->getRepository('AppBundle:Requisitoinscricao')->findAll();

        return $this->render('requisitoinscricao/index.html.twig', array(
            'requisitoinscricaos' => $requisitoinscricaos,
        ));
    }

    /**
     * Creates a new requisitoinscricao entity.
     *
     * @Route("/new", name="requisitoinscricao_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $requisitoinscricao = new Requisitoinscricao();
        $form = $this->createForm('AppBundle\Form\RequisitoinscricaoType', $requisitoinscricao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($requisitoinscricao);
            $em->flush($requisitoinscricao);

            return $this->redirectToRoute('requisitoinscricao_show', array('id' => $requisitoinscricao->getId()));
        }

        return $this->render('requisitoinscricao/new.html.twig', array(
            'requisitoinscricao' => $requisitoinscricao,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a requisitoinscricao entity.
     *
     * @Route("/{id}", name="requisitoinscricao_show")
     * @Method("GET")
     */
    public function showAction(Requisitoinscricao $requisitoinscricao)
    {
        $deleteForm = $this->createDeleteForm($requisitoinscricao);

        return $this->render('requisitoinscricao/show.html.twig', array(
            'requisitoinscricao' => $requisitoinscricao,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing requisitoinscricao entity.
     *
     * @Route("/{id}/edit", name="requisitoinscricao_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Requisitoinscricao $requisitoinscricao)
    {
        $deleteForm = $this->createDeleteForm($requisitoinscricao);
        $editForm = $this->createForm('AppBundle\Form\RequisitoinscricaoType', $requisitoinscricao);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('requisitoinscricao_edit', array('id' => $requisitoinscricao->getId()));
        }

        return $this->render('requisitoinscricao/edit.html.twig', array(
            'requisitoinscricao' => $requisitoinscricao,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a requisitoinscricao entity.
     *
     * @Route("/{id}", name="requisitoinscricao_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Requisitoinscricao $requisitoinscricao)
    {
        $form = $this->createDeleteForm($requisitoinscricao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($requisitoinscricao);
            $em->flush($requisitoinscricao);
        }

        return $this->redirectToRoute('requisitoinscricao_index');
    }

    /**
     * Creates a form to delete a requisitoinscricao entity.
     *
     * @param Requisitoinscricao $requisitoinscricao The requisitoinscricao entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Requisitoinscricao $requisitoinscricao)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('requisitoinscricao_delete', array('id' => $requisitoinscricao->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
