<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Crop;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{

    /**
     * @Route("/home", name="home")
     */
    public function indexAction(Request $request) {
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }

        // get username
        $session = $request->getSession();
        $username = $session->get('name');

        // get current personnage
        // $personRepo = $this->getDoctrine()
        //     ->getRepository('AppBundle:Personnage');
        $personnage = 'Java';

        // find crops in db for the given personnage/username combination
        $personnageID = 0;
        $cropRepo = $this->getDoctrine()
            ->getRepository('AppBundle:Crop');
        $crops = $cropRepo->findBy(array('personnageID' => $personnageID));

        // initialize current time
        date_default_timezone_set('Europe/Paris');
        $date = date('Y/m/d H:i:s');

        return $this->render(
            'default/home.html.twig',
            array(
                'crops' => $crops, 
                'date' => $date, 
                'username' => $username,
                'personnage' => $personnage
            )
        );
    }
}
?>