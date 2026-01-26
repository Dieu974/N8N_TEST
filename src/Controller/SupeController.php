<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SupeController extends AbstractController
{
    #[Route('/supe', name: 'app_supe')]
    public function index(): Response
    {
        return $this->render('supe/index.html.twig', [
            'controller_name' => 'SupeController',
        ]);
    }
}
