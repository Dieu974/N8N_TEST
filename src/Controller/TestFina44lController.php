<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TestFina44lController extends AbstractController
{
    #[Route('/test/fina44l', name: 'app_test_fina44l')]
    public function index(): Response
    {
        return $this->render('test_fina44l/index.html.twig', [
            'controller_name' => 'TestFina44lController',
        ]);
    }
}
