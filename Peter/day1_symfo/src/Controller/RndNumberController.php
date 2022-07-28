<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RndNumberController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('rnd_number/index.html.twig', [
            'controller_name' => 'RndNumberController',
        ]);
    }

    #[Route('/rndNumber/{max}', name: 'random_number')] // {max} MUST be given, no matter what
    public function number($max=10){
        $number = random_int(0, $max);
        return $this->render('rnd_number/rnd.html.twig',[
            'randomNumber' => $number
        ]);
    }
}
