<?php

namespace AppBundle\Controller\MAC;

use AppBundle\Entity\Prateleira;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Prateleira controller.
 *
 * @Route("prateleira")
 */
class PrateleiraController extends Controller
{
    /**
     * Lists all prateleira entities.
     *
     * @Route("/", name="prateleira_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prateleiras = $em->getRepository('AppBundle:Prateleira')->findAll();

        return $this->render('prateleira/index.html.twig', array(
            'prateleiras' => $prateleiras,
        ));
    }

    /**
     * Creates a new prateleira entity.
     *
     * @Route("/new", name="prateleira_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $prateleira = new Prateleira();
        $form = $this->createForm('AppBundle\Form\PrateleiraType', $prateleira);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($prateleira);
            $em->flush($prateleira);

            return $this->redirectToRoute('prateleira_show', array('id' => $prateleira->getId()));
        }

        return $this->render('prateleira/new.html.twig', array(
            'prateleira' => $prateleira,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a prateleira entity.
     *
     * @Route("/{id}", name="prateleira_show")
     * @Method("GET")
     */
    public function showAction(Prateleira $prateleira)
    {
        $deleteForm = $this->createDeleteForm($prateleira);

        return $this->render('prateleira/show.html.twig', array(
            'prateleira' => $prateleira,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing prateleira entity.
     *
     * @Route("/{id}/edit", name="prateleira_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Prateleira $prateleira)
    {
        $deleteForm = $this->createDeleteForm($prateleira);
        $editForm = $this->createForm('AppBundle\Form\PrateleiraType', $prateleira);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('prateleira_edit', array('id' => $prateleira->getId()));
        }

        return $this->render('prateleira/edit.html.twig', array(
            'prateleira' => $prateleira,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a prateleira entity.
     *
     * @Route("/{id}", name="prateleira_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Prateleira $prateleira)
    {
        $form = $this->createDeleteForm($prateleira);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($prateleira);
            $em->flush($prateleira);
        }

        return $this->redirectToRoute('prateleira_index');
    }

    /**
     * Creates a form to delete a prateleira entity.
     *
     * @param Prateleira $prateleira The prateleira entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Prateleira $prateleira)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('prateleira_delete', array('id' => $prateleira->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
