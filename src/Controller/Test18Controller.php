<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class Test18Controller extends AbstractController
{
    #[Route('/test18', name: 'app_test18')]
    public function index(): Response
    {
        return $this->render('test18/index.html.twig', [
            'controller_name' => 'Test18Controller',
        ]);
    }
}
