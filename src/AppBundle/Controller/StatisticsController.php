<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Crop;
use AppBundle\Entity\Personnage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StatisticsController extends Controller
{

    /**
     * @Route("/statistics", name="statistics")
     */
    public function statisticsAction (Request $request) {
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }
        // get current personnage and username
        $personnageName = $_GET['name'];
        $username = $request->getSession()->get('name');
    	$em = $this->getDoctrine()->getManager();
        // get personnage, user, and crops repository
    	$repositoryPersonnages = $this->getDoctrine()->getRepository('AppBundle:Personnage');
    	$repositoryUsers = $this -> getDoctrine() -> getRepository('AppBundle:User');
        $repositoryCrops = $this -> getDoctrine() -> getRepository('AppBundle:Crop');
        // counting the number of crops, users, and personnages
        $allCrops = $repositoryCrops -> findAll();
        $numberCrops = sizeof($allCrops);
    	$allPersonnages = $repositoryPersonnages -> findAll();
    	$allUsers = $repositoryUsers -> findAll();
    	$numberPersonnages = sizeof($allPersonnages);
    	$numberUsers=sizeof($allUsers);
        // query to find the most money
		$query = $em->createQueryBuilder()
		    ->select('MAX(e.money)')
		    ->from('AppBundle:Personnage', 'e')
		    ->getQuery();
		$most_money=$query->getSingleScalarResult();
        // query to find the personnage with the most money
		$personnage=$repositoryPersonnages->findOneBy(array('money'=>$most_money));
        // sending information to statistics html page
		return $this->render('statistics/statistics.html.twig',
            array(
                'numPersonnages' => $numberPersonnages, 
                'numUsers' => $numberUsers, 'money' => $most_money, 
                'personnage' => $personnage->getName(),
                'rich_user' => $personnage->getUsername(),
                'curr_personnage' => $personnageName,
                'username' => $username,
                'crops' => $numberCrops
            )
        );
    }
}
?>