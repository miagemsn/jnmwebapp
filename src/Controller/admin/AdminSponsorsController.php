<?php

namespace App\Controller\admin;

use App\Repository\SponsorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminSponsorsController extends AbstractController
{
    /**
     *
     * @var SponsorRepository
     */
    private $repository;

    /**
     *
     * @var EntityManagerInterface
     */
    private $om;

    /**
     *
     * @param SponsorRepository $repository
     * @param EntityManagerInterface $om
     */
    function __construct(SponsorRepository $repository, EntityManagerInterface $om) {
        $this->repository = $repository;
        $this->om = $om;
    }

    #[Route('/admin/partenaires', name: 'admin.sponsors')]
    public function index(): Response
    {
        $sponsors = $this->repository->findAll();
        return $this->render('admin/sponsor/sponsors.html.twig', [
            'sponsors' => $sponsors,
        ]);
    }
}
