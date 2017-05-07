<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Crop;
use AppBundle\Entity\Personnage;
use AppBundle\Form\CropType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Constraints\DateTime;


class BuyController extends Controller
{

    /**
     * @Route("/buy", name="buy")
     */
    public function buyAction(Request $request) {
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }
        
        return $this->render(
            'buy/buy.html.twig'
        );
    }
    /**
     * @Route("/wheat", name="wheat")
     */
    public function wheatAction(Request $request) {
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }
        // 1) build the form
        $crop = new Crop();
            //TO DO: check if the personnage has enough money
            $now = new \DateTime("now");
            $crop->setType('wheat');
            $crop->setDateBought($now);
            $session = $request->getSession();
            $personnageID = $session -> get('id');
            $crop->setPersonnageID($personnageID);
            //TO DO: decrease the amount of money the person has
            // 5) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($crop);
            $em->flush();

            return $this->redirectToRoute('buy');
        
    }
    /**
     * @Route("/corn", name="corn")
     */
    public function cornAction(Request $request) {
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }
        // 1) build the form
        $crop = new Crop();
        $now = new \DateTime("now");
        $crop->setType('corn');
        $crop->setDateBought($now);
        $session = $request->getSession();
        $personnageID = $session -> get('id');
        $crop->setPersonnageID($personnageID);
        // 5) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($crop);
        $em->flush();

        return $this->redirectToRoute('buy');
        
    }
    /**
     * @Route("/carrots", name="carrots")
     */
    public function carrotsAction(Request $request) {
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }
        // 1) build the form
        $crop = new Crop();
        // 2) handle the submit (will only happen on POST)
            // 4) deal with uploaded avatar file
            //date_default_timezone_set('France/Paris');
        $now = new \DateTime("now");
        $crop->setType('carrots');
        $crop->setDateBought($now);
        $session = $request->getSession();
        $personnageID = $session -> get('id');
        $crop->setPersonnageID($personnageID);
        // 5) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($crop);
        $em->flush();

        return $this->redirectToRoute('buy');
        
    }
    /**
     * @Route("/strawberries", name="strawberries")
     */
    public function strawberryAction(Request $request) {
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }
        // 1) build the form
        $crop = new Crop();
        // 2) handle the submit (will only happen on POST)
            // 4) deal with uploaded avatar file
            //date_default_timezone_set('France/Paris');
        $now = new \DateTime("now");
        $crop->setType('strawberries');
        $crop->setDateBought($now);
        $session = $request->getSession();
        $personnageID = $session -> get('id');
        $crop->setPersonnageID($personnageID);
        // 5) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($crop);
        $em->flush();

        return $this->redirectToRoute('buy');
        
    }
    /**
     * @Route("/watermelon", name="watermelon")
     */
    public function watermelonAction(Request $request) {
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }
        // 1) build the form
        $crop = new Crop();
        // 2) handle the submit (will only happen on POST)
            // 4) deal with uploaded avatar file
            //date_default_timezone_set('France/Paris');
        $now = new \DateTime("now");
        $crop->setType('watermelon');
        $crop->setDateBought($now);
        $session = $request->getSession();
        $personnageID = $session -> get('id');
        $crop->setPersonnageID($personnageID);
        // 5) save the User!
        $em = $this->getDoctrine()->getManager();
        $em->persist($crop);
        $em->flush();

        return $this->redirectToRoute('buy');
        
    }
}
?>