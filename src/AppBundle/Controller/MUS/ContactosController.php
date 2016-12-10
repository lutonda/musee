<?php

namespace AppBundle\Controller\MUS;

use AppBundle\Data\MUS\Contactos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Domain\MUS\ConstactosRepositorio;

/**
 * Contacto controller.
 *
 * @Route("contactos")
 */
class ContactosController extends Controller
{
    /**
     * Lists all contacto entities.
     *
     * @Route("/", name="contactos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $contactos = new ConstactosRepositorio($em);
        $contactos = $contactos->mostrarTodos();

        return $this->render('contactos/index.html.twig', array(
            'contactos' => $contactos,
        ));
    }

    /**
     * Creates a new contacto entity.
     *
     * @Route("/new", name="contactos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contacto = new Contacto();
        $form = $this->createForm('AppBundle\Form\ContactosType', $contacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contacto);
            $em->flush($contacto);

            return $this->redirectToRoute('contactos_show', array('id' => $contacto->getId()));
        }

        return $this->render('contactos/new.html.twig', array(
            'contacto' => $contacto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contacto entity.
     *
     * @Route("/{id}", name="contactos_show")
     * @Method("GET")
     */
    public function showAction(Contactos $contacto)
    {
        $deleteForm = $this->createDeleteForm($contacto);

        return $this->render('contactos/show.html.twig', array(
            'contacto' => $contacto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contacto entity.
     *
     * @Route("/{id}/edit", name="contactos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Contactos $contacto)
    {
        $deleteForm = $this->createDeleteForm($contacto);
        $editForm = $this->createForm('AppBundle\Form\ContactosType', $contacto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contactos_edit', array('id' => $contacto->getId()));
        }

        return $this->render('contactos/edit.html.twig', array(
            'contacto' => $contacto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contacto entity.
     *
     * @Route("/{id}", name="contactos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Contactos $contacto)
    {
        $form = $this->createDeleteForm($contacto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contacto);
            $em->flush($contacto);
        }

        return $this->redirectToRoute('contactos_index');
    }

    /**
     * Creates a form to delete a contacto entity.
     *
     * @param Contactos $contacto The contacto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contactos $contacto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contactos_delete', array('id' => $contacto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
