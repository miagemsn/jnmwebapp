<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use App\Repository\SponsorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class NazforController extends AbstractController
{
    private $repository;

    private $om;

    function __construct(SponsorRepository $repository, EntityManagerInterface $om)
    {
        $this->repository = $repository;
        $this->om = $om;
    }

    #[Route('/nazfor', name: 'app_nazfor')]
    public function index(Request $request, EntityManagerInterface $om): Response
    {
        $sponsor = new Sponsor();
        $sponsorForm = $this->createForm(SponsorType::class, $sponsor);
        $sponsorForm->handleRequest($request);

        return $this->render('nazfor/index.html.twig', [
            'sponsorForm' => $sponsorForm->createView()
        ]);
    }
}


