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
        // initialize db repository
        $session = $request->getSession();
        $repositoryCrop = $this->getDoctrine()
            ->getRepository('AppBundle:Crop');
        $repositoryPersonnage = $this->getDoctrine()
            ->getRepository('AppBundle:Personnage');
        $personnageName = $_GET['name'];
        $username = $session->get('name');
        // find crops for the given personnage/username combination
        $personnage = $repositoryPersonnage->findOneBy(
            array('name' => $personnageName, 'username' => $username)
        );
        $personnageID=$personnage->getID();
        $session -> set('id', $personnageID);
        $crops = $repositoryCrop->findBy(array('personnageID' => $personnageID));

        date_default_timezone_set('Europe/Paris');
        $date = date('Y/m/d H:i:s');

        // return $this->render(
        //     'base.html.twig',
        //     array('crops' => $crops, 'date' => $date, 'id' => $personnageID)
        // );
        return $this->render(
            'default/home.html.twig',
            array('crops' => $crops, 'date' => $date)
        );
    }
}
?>