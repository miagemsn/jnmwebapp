<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/apropos', name: 'public.about')]
    public function index(): Response
    {
        return $this->render('public/about.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
