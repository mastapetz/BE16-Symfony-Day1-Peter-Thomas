<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/homepage', name: 'app_home_page')]
    public function index(): Response
    {
        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }
    #[Route('/home', name: 'home_test')]
    public function do_something() :Response
    {
        return $this->render('home_page/index.html.twig',[
            'controller_name' => 'HomePageController',
            'what_dis' => 'this be that'
        ]);
    }
}
