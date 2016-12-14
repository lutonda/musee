<?php

namespace AppBundle\Controller\MUS;

use AppBundle\Domain\MUS\PessoaRepositorio;
use AppBundle\Domain\MUS\UsuarioRepositorio;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
//use AppBundle\Data\MUS\usuario;
use AppBundle\Data;

/**
 * Usuario controller.
 *
 * @Route("utilizadores")
 */
class UsuarioController extends Controller
{
    /**
     * Lists all usuario entities.
     *
     * @Route("/", name="utilizadores")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $usuarios = new UsuarioRepositorio($em);
        $usuarios = $usuarios->mostrarTodos();

        $deleteForm = '';//$this->createDeleteForm($usuarios);
        return $this->render('index.html.twig',[
            'pagina'=>'/usuario/index.html.twig',
            'usuarios' => $usuarios,
            'delete_form' => $deleteForm//->createView(),

        ]);
    }

    /**
     * Creates a new usuario entity.
     *
     * @Route("/new", name="usuario_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {

        $usuario = new Data\MUS\Usuario();
        $form = $this->createForm('AppBundle\Application\MUS\UsuarioType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush($usuario);

            return $this->redirectToRoute('evento_show', array('id' => $usuario->getId()));
        }

        return $this->render('index.html.twig', [
                'pagina' => "usuario/new.html.twig",
                'usuario' => $usuario,
                'form' => $form->createView()]
        );
        /*var_dump($request->request);
        $usuario = new Data\MUS\Usuario();
        $form = $this->createForm('AppBundle\Application\MUS\UsuarioType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            return $this->render('index.html.twig', [
                'pagina' => "usuario/index.html.twig"
            ]);

           // return $this->redirectToRoute('usuario_show', array('id' => $usuario->getId()));
        }

        return $this->render('index.html.twig', [
            'pagina' => "usuario/new.html.twig",
            'usuario' => $usuario,
            'form' => $form->createView(),
        ]);*/
    }


    /**
     * Finds and displays a usuario entity.
     *
     * @Route("/{id}", name="usuario_show")
     * @Method("GET")
     */
    public function showAction(Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);

        return $this->render('usuario/show.html.twig', array(
            'usuario' => $usuario,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing usuario entity.
     *
     * @Route("/{id}/edit", name="usuario_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Usuario $usuario)
    {
        $deleteForm = $this->createDeleteForm($usuario);
        $editForm = $this->createForm('AppBundle\Form\UsuarioType', $usuario);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('usuario_edit', array('id' => $usuario->getId()));
        }

        return $this->render('usuario/edit.html.twig', array(
            'usuario' => $usuario,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a usuario entity.
     *
     * @Route("/{id}", name="usuario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Usuario $usuario)
    {
        $form = $this->createDeleteForm($usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($usuario);
            $em->flush($usuario);
        }

        return $this->redirectToRoute('usuario_index');
    }

    /**
     * Creates a form to delete a usuario entity.
     *
     * @param Usuario $usuario The usuario entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Usuario $usuario)
    {

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('usuario_delete', array('id' => $usuario->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /******SER ESTUDADO********/
    /**
     * Creates a new usuario entity.
     *
     * @Route("/save", name="usuario_save")
     * @Method({"GET", "POST"})
     */
    public function createAction(Request $req)
    {

        $usuario = new Data\MUS\Usuario();
        $pessoa = new Data\MUS\Pessoa();
        $contactos=new Data\MUS\Contactos();

        $em   = $this->getDoctrine()->getManager();

        $usuarios = new UsuarioRepositorio($em);
        $pessoas=new PessoaRepositorio($em);

        $form = $this->createForm('AppBundle\Application\MUS\UsuarioType', $usuario);
        $form->handleRequest($req);
        $usuarios = new UsuarioRepositorio($em);
        $pessoa->setNome($req->request->get('firstname').' '.$req->request->get('lastname'));
        $pessoa->setData(date('Y-m-d h:i:s'));
        //$pessoas->salvarUm($pessoa);
        $pessoa->setId($pessoas->ShowLast()->getId());
        $usuario->setUsername($req->request->get('username'));
        $usuario->setPassword($req->request->get('password'));
        $usuario->setIdpessoa($pessoa);
        $usuarios->salvarUm($usuario);

        var_dump($usuarios->ShowLast());
        return $this->render('index.html.twig', [
            'pagina' => "usuario/index.html.twig",
            'usuarios'=> $usuarios->ShowLast()
        ]);
      /*  $pessoa->setNome($req->request->firstname.''.$req->request->lasttname);
        $contactos->setDescricao($req->request->email);
        $contactos->setIdtiipocontacto(2);

        $user= $form->getData();

        $user->setCreated(new \DateTime());
        $user->setRoles('ROLE_USER');
        $user->setGravatar('http://www.gravatar.com/avatar/'.md5(trim($req->get('email'))));
        $user->setActive(true);

        $pwd=$user->getPassword();
        $encoder=$this->container->get('security.password_encoder');
        $pwd=$encoder->encodePassword($user, $pwd);
        $user->setPassword($pwd);

        $em->persist($user);
        $em->flush();

        $url = $this->generateUrl('login');
        return $this->redirect($url);*/
        $encoder=$this->container->get('security.password_encoder');
    }

}
