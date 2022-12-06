<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminTransportsController extends AbstractController
{
    #[Route('/admin/transports', name: 'admin.transports')]
    public function index(): Response
    {
        return $this->render('admin/admin.transports.html.twig', [
            'controller_name' => 'AdminTransportsController',
        ]);
    }
}
