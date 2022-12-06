<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminActivitesController extends AbstractController
{
    #[Route('/admin/activites', name: 'admin.activites')]
    public function index(): Response
    {
        return $this->render('admin/admin.activites.html.twig', [
            'controller_name' => 'AdminActivitesController',
        ]);
    }
}
