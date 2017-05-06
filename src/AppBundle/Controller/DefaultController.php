<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction () {
    	//return $this->redirectToRoute('login');
        return $this->redirectToRoute('statistics');
    }
}
?>