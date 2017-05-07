<?php
namespace AppBundle\Controller;

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
    	$repositoryPersonnages = $this->getDoctrine()->getRepository('AppBundle:Personnage');
    	$repositoryUsers = $this -> getDoctrine() -> getRepository('AppBundle:User');
    	$allPersonnages = $repositoryPersonnages -> findAll();
    	$allUsers = $repositoryUsers -> findAll();
    	$numberPersonnages = sizeof($allPersonnages);
    	$numberUsers=sizeof($allUsers);
    	// query for a single product by its primary key (usually "id")
		//$personnage = $repositoryPersonnages->findOneBy(array('name' => 'robot'));
		//$username = $personnage -> getUsername();
		// // dynamic method names to find a single product based on a column value
		// $product = $repository->findOneById($productId);
		// $product = $repository->findOneByName('Keyboard');

		// // dynamic method names to find a group of products based on a column value
		// $products = $repository->findByPrice(19.99);

		// // find *all* products
		// $products = $repository->findAll();
		$query = $em->createQueryBuilder()
		    ->select('MAX(e.id)')
		    ->from('AppBundle:Personnage', 'e')
		    ->getQuery();
		$highest_id=$query->getSingleScalarResult();
		$personnage=$repositoryPersonnages->findOneBy(array('id'=>$highest_id));

    	//$maxid= $query->getQuery()->getResult();
		return $this->render('statistics/statistics.html.twig',
            array(
                'numPersonnages' => $numberPersonnages, 
                'numUsers' => $numberUsers, 'id' => $highest_id, 
                'personnage' => $personnage->getName(),
                'curr_personnage' => $personnageName,
                'username' => $username
            )
        );
    }
}
?>