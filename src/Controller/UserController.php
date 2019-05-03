<?php

namespace App\Controller;

use App\Entity\User;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Form\UserType;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder = $encoder;
    }

    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * 
     * @Route("/user/new", name="new_user", methods={"POST", "GET"} )
     */

    public function new (Request $request) {
        $user = new User($this->encoder);

        $form = $this->createForm(UserType::class, $user);
          
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();

            $email = $user->getEmail();
            
            $user->setUserName(substr($email, 0, strpos($email, '@')));

            $user->setPassword(
                $this->encoder->encodePassword($user, $user->getPassword())
            );

            $user->setState(1);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            
            return $this->redirectToRoute('user');
        }

        return $this->render('user/new.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
