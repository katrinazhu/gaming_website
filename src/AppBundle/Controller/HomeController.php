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
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Crop');

        // find crops for the given personnage/username combination
        $personnageID = 0;
        $crops = $repository->findBy(array('personnageID' => $personnageID));

        date_default_timezone_set('Europe/Paris');
        $date = date('Y/m/d H:i:s');

        return $this->render(
            'default/home.html.twig',
            array('crops' => $crops, 'date' => $date)
        );
    }
}
?>