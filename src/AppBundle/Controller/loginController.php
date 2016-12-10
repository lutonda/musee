<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class loginController extends Controller
{
    /**
     * @Route("/login")
     */

    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        $username = $request->get('username');
        if ($request->request->get('username')) {
            $error = $request->attributes->get(
                Security::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session &&
            $session->has(Security::AUTHENTICATION_ERROR)) {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        $lastUsername = (null === $session) ? '' :
            $session->get(Security::LAST_USERNAME);
        return $this->render(
            'login.html.twig', array(
                'last_username' => $lastUsername,
                'error' => $error
            )
        );

    }
}
