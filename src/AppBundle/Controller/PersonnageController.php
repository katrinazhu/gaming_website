<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PersonnageController extends Controller{
    /**
     * @Route("/personnages", name="personnages")
     */
    public function choosePersonAction(Request $request) {
        // initialize db repository
        $session = $request->getSession();
        //$repository = $this->getDoctrine()->getRepository('AppBundle:Personnage');
        // find personnages with given user_id
        //$personnages = $repository->findBy(array('userId' => $user_id));
        // render page displaying past personnages + option to create a new one
        return $this->render('security/base.html.twig', array('name'=>$session->get('name')));
    }
}
?>