<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Personnage;
use AppBundle\Form\PersonnageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PersonnageController extends Controller
{

    /**
     * @Route("/personnage", name="personnage")
     */
    public function chooseAction(Request $request) {
        // initialize db repository
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Personnage');

        // find personnages with given username
        $session = $request->getSession();
        $username = $session->get('name');
        $personnages = $repository->findBy(array('username' => $username));

        // render page displaying past personnages + option to create a new one
        return $this->render('personnage/personnage.html.twig',
            array('personnages' => $personnages));
    }

    /**
     * @Route("/personnage/new", name="personnage_new")
     */
    public function newAction(Request $request) {
        // 1) build the form
        $personnage = new Personnage();
        $form = $this->createForm(PersonnageType::class, $personnage);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) save the username
            $session = $request->getSession();
            $username = $session->get('name');
            $personnage->setUsername($username);

            // 4) deal with uploaded avatar file

            // $file stores the uploaded PDF file
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $personnage->getAvatar();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // move file to directory where avatars are stored
            $file->move(
                $this->getParameter('avatar_directory'),
                $fileName
            );

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $personnage->setAvatar($fileName);

            // 5) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($personnage);
            $em->flush();

            return $this->redirectToRoute('personnage');
        }

        return $this->render(
            'personnage/newPersonnage.html.twig',
            array('form' => $form->createView())
        );
    }
}

// creates new Personnages
        // $p1 = new Personnage();
        // $p1->setName('Hannah');
        // $p1->setUserID(0);

        // $p2 = new Personnage();
        // $p2->setName('Katrina');
        // $p2->setUserID(0);

        // $em = $this->getDoctrine()->getManager();

        // // tells Doctrine you want to (eventually) save the Product (no queries yet)
        // $em->persist($p1);
        // $em->persist($p2);

        // // actually executes the queries (i.e. the INSERT query)
        // $em->flush();

?>
