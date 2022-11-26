<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\InscritRepository;

class AdminController extends AbstractController
{
    /**
     *
     * @var InscritRepository
     */
    private $repository;

    /**
     *
     * @var EntityManagerInterface
     */
    private $om;

    /**
     *
     * @param InscritRepository $repository
     * @param EntityManagerInterface $om
     */
    function __construct(InscritRepository $repository, EntityManagerInterface $om) {
        $this->repository = $repository;
        $this->om = $om;
    }

    #[Route('/admin', name: 'admin.inscrits')]
    public function index(): Response
    {
        $inscrits = $this->repository->findAll();
        return $this->render('admin/admin.html.twig', [
            'controller_name' => 'AdminInscritController',
            'inscrits' => $inscrits,
        ]);
    }
}
