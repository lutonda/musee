<?php

namespace AppBundle\Controller\MEV;

use AppBundle\Entity\Convitepessoa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Convitepessoa controller.
 *
 * @Route("convitepessoa")
 */
class ConvitepessoaController extends Controller
{
    /**
     * Lists all convitepessoa entities.
     *
     * @Route("/", name="convitepessoa_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $convitepessoas = $em->getRepository('AppBundle:Convitepessoa')->findAll();

        return $this->render('convitepessoa/index.html.twig', array(
            'convitepessoas' => $convitepessoas,
        ));
    }

    /**
     * Creates a new convitepessoa entity.
     *
     * @Route("/new", name="convitepessoa_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $convitepessoa = new Convitepessoa();
        $form = $this->createForm('AppBundle\Form\ConvitepessoaType', $convitepessoa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($convitepessoa);
            $em->flush($convitepessoa);

            return $this->redirectToRoute('convitepessoa_show', array('id' => $convitepessoa->getId()));
        }

        return $this->render('convitepessoa/new.html.twig', array(
            'convitepessoa' => $convitepessoa,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a convitepessoa entity.
     *
     * @Route("/{id}", name="convitepessoa_show")
     * @Method("GET")
     */
    public function showAction(Convitepessoa $convitepessoa)
    {
        $deleteForm = $this->createDeleteForm($convitepessoa);

        return $this->render('convitepessoa/show.html.twig', array(
            'convitepessoa' => $convitepessoa,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing convitepessoa entity.
     *
     * @Route("/{id}/edit", name="convitepessoa_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Convitepessoa $convitepessoa)
    {
        $deleteForm = $this->createDeleteForm($convitepessoa);
        $editForm = $this->createForm('AppBundle\Form\ConvitepessoaType', $convitepessoa);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('convitepessoa_edit', array('id' => $convitepessoa->getId()));
        }

        return $this->render('convitepessoa/edit.html.twig', array(
            'convitepessoa' => $convitepessoa,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a convitepessoa entity.
     *
     * @Route("/{id}", name="convitepessoa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Convitepessoa $convitepessoa)
    {
        $form = $this->createDeleteForm($convitepessoa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($convitepessoa);
            $em->flush($convitepessoa);
        }

        return $this->redirectToRoute('convitepessoa_index');
    }

    /**
     * Creates a form to delete a convitepessoa entity.
     *
     * @param Convitepessoa $convitepessoa The convitepessoa entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Convitepessoa $convitepessoa)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('convitepessoa_delete', array('id' => $convitepessoa->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
