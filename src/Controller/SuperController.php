<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SuperController extends AbstractController
{
    #[Route('/super', name: 'app_super')]
    public function index(): Response
    {
        return $this->render('super/index.html.twig', [
            'controller_name' => 'SuperController',
        ]);
    }
}
