<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TestFinalController extends AbstractController
{
    #[Route('/test/final', name: 'app_test_final')]
    public function index(): Response
    {
        return $this->render('test_final/index.html.twig', [
            'controller_name' => 'TestFinalController',
        ]);
    }
}
