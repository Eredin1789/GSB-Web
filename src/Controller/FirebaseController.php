<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FirebaseController extends AbstractController
{
    #[Route('/firebase', name: 'app_firebase')]
    public function index(): Response
    {
        return $this->render('firebase/index.html.twig', [
            'controller_name' => 'FirebaseController',
        ]);
    }
}
