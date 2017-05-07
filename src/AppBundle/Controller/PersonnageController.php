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
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }


        // initialize db repository
        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Personnage');

        $usr= $this->get('security.token_storage')->getToken()->getUser();
        $session = $request->getSession();
        if(!is_string($usr)){
            $username=$usr->getUsername();
            // store an attribute for reuse during a later user request
            $session->set('name', $username);
        }
        // find personnages with given username
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
        // if not logged in, redirect to the login page
        $securityContext = $this->container->get('security.authorization_checker');
        if (! $securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('login');
        }


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

?>
