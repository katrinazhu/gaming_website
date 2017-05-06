<?php
namespace AppBundle\Controller;
use AppBundle\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{

    /**
     * @Route("/home", name="home")
     */
    public function indexAction () {
        return $this->render('default/home.html.twig');
    }
}
?>