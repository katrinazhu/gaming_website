<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
     /**
     * @Route("/", name="homepage")
     */
    public function indexAction () {

        return $this->redirectToRoute('login');
    }
}
?>