<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(): Response
    {

        //Pr Set 1 user--
        //EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher--en param
        // $user = new User();
        // $user->setEmail('bonabal99@yahoo.fr');
        // $user->setPassword($userPasswordHasher->hashPassword($user, 'azerty'));
        // $user->setFirstName('olivier');
        // $user->setLastName('bonabal');

        // $entityManager->persist($user);
        // $entityManager->flush();

        return $this->render('home_page/index.html.twig');
    }
}
