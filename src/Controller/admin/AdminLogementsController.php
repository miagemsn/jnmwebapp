<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminLogementsController extends AbstractController
{
    #[Route('/logements', name: 'app_logements')]
    public function index(): Response
    {
        return $this->render('admin.logements.html.twig', [
            'controller_name' => 'AdminLogementsController',
        ]);
    }
}
