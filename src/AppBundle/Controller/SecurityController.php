<?php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
	/**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
	    $authenticationUtils = $this->get('security.authentication_utils');
	    // get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();
	    $lastUsername = $authenticationUtils->getLastUsername();

        if ($error) {
            echo '<script>console.log("error")</script>';
        } else {
            echo '<script>console.log("no error")</script>';
        }

	    $usr= $this->get('security.token_storage')->getToken()->getUser();
        if (!is_string($usr)) {
            $username=$usr->getUsername();
            $session = $request->getSession();
            // // store an attribute for reuse during a later user request
            $session->set('name', $username);
        }
        return $this->render('security/login.html.twig', array(
	        'last_username' => $lastUsername,
	        'error'         => $error,
	    ));
    }
}
?>