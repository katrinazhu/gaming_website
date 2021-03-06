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
        // get session and personnage information
        $session = $request->getSession();
        $username = $session -> get('name');
        $personnageID = $session -> get('id');
        $repositoryPersonnage = $this->getDoctrine()
            ->getRepository('AppBundle:Personnage');
        $personnage = $repositoryPersonnage->findOneById($personnageID);
        $personnageName = $personnage->getName();
        $money = $personnage -> getMoney();
        $enough_money=true;
        // render the buy page, sending over personnage information
        return $this->render(
            'buy/buy.html.twig',
            array(
                'money' => $money,
                'enough' => $enough_money,
                'personnage' => $personnageName,
                'username' => $username
            )
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
        // get session and personnage information
        $session = $request->getSession();
        $username = $session -> get('name');
        $personnageID = $session -> get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Personnage');
        $personnage = $repository->findOneById($personnageID);
        $money = $personnage -> getMoney();
        $personnageName = $personnage->getName();
        // check if personnage has enough money to buy
        if ($money < 1){
            // return the user to the buy page with an error message
            return $this->render(
                'buy/buy.html.twig',
                array(
                'money' => $money,
                'enough' => false,
                'personnage' => $personnageName,
                'username' => $username
            )
        );
        }
        // update information upon crop bought
        $personnage -> setMoney($money-1);
        $now = new \DateTime("now");
        $crop->setType('wheat');
        $crop->setDateBought($now);
        $session = $request->getSession();
        $personnageID = $session -> get('id');
        $crop->setPersonnageID($personnageID);  
        // update crop database
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
        // get session and personnage information
        $session = $request->getSession();
        $username = $session -> get('name');
        $personnageID = $session -> get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Personnage');
        $personnage = $repository->findOneById($personnageID);
        $personnageName = $personnage->getName();
        $money = $personnage -> getMoney();
        // check if personnage has enough money to buy
        if ($money < 10){
            // return the user to the buy page with an error message
            return $this->render(
                'buy/buy.html.twig',
                array(
                'money' => $money,
                'enough' => false,
                'personnage' => $personnageName,
                'username' => $username
            )
        );
        }
        // update information upon crop bought
        $personnage -> setMoney($money-10);
        $now = new \DateTime("now");
        $crop->setType('corn');
        $crop->setDateBought($now);
        $session = $request->getSession();
        $personnageID = $session -> get('id');
        $crop->setPersonnageID($personnageID);
        // update crop database
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
        // get session and personnage information
        $session = $request->getSession();
        $username = $session -> get('name');
        $personnageID = $session -> get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Personnage');
        $personnage = $repository->findOneById($personnageID);
        $personnageName = $personnage->getName();
        $money = $personnage -> getMoney();
        // check if personnage has enough money to buy
        if ($money < 50){
            // return the user to the buy page with an error message
            return $this->render(
                'buy/buy.html.twig',
                array(
                'money' => $money,
                'enough' => false,
                'personnage' => $personnageName,
                'username' => $username
            )
        );
        }
        // update information upon crop bought
        $personnage -> setMoney($money-50);
        $now = new \DateTime("now");
        $crop->setType('carrots');
        $crop->setDateBought($now);
        $session = $request->getSession();
        $personnageID = $session -> get('id');
        $crop->setPersonnageID($personnageID);
        // update crop database
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
        // get session and personnage information
        $session = $request->getSession();
        $username = $session -> get('name');
        $personnageID = $session -> get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Personnage');
        $personnage = $repository->findOneById($personnageID);
        $personnageName = $personnage->getName();
        $money = $personnage -> getMoney();
        // check if personnage has enough money to buy
        if ($money < 150){
            // return the user to the buy page with an error message
            return $this->render(
                'buy/buy.html.twig',
                array(
                'money' => $money,
                'enough' => false,
                'personnage' => $personnageName,
                'username' => $username
            )
        );
        }
        // update information upon crop bought
        $personnage -> setMoney($money-150);
        $now = new \DateTime("now");
        $crop->setType('strawberries');
        $crop->setDateBought($now);
        $session = $request->getSession();
        $personnageID = $session -> get('id');
        $crop->setPersonnageID($personnageID);
        // update crop database
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
        // get session and personnage information
        $session = $request->getSession();
        $username = $session -> get('name');
        $personnageID = $session -> get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Personnage');
        $personnage = $repository->findOneById($personnageID);
        $personnageName = $personnage->getName();
        $money = $personnage -> getMoney();
        // check if personnage has enough money to buy
        if ($money < 500){
            // return the user to the buy page with an error message
            return $this->render(
                'buy/buy.html.twig',
                array(
                'money' => $money,
                'enough' => false,
                'personnage' => $personnageName,
                'username' => $username
            )
        );
        }
        // update information upon crop bought
        $personnage -> setMoney($money-500);
        $now = new \DateTime("now");
        $crop->setType('watermelon');
        $crop->setDateBought($now);
        $session = $request->getSession();
        $personnageID = $session -> get('id');
        $crop->setPersonnageID($personnageID);
        // update crop database
        $em = $this->getDoctrine()->getManager();
        $em->persist($crop);
        $em->flush();

        return $this->redirectToRoute('buy');
        
    }
}
?>