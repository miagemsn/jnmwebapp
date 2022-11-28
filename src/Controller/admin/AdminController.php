<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ProfilRepository;

class AdminController extends AbstractController
{
    /**
     *
     * @var ProfilRepository
     */
    private $repository;

    /**
     *
     * @var EntityManagerInterface
     */
    private $om;

    /**
     *
     * @param ProfilRepository $repository
     * @param EntityManagerInterface $om
     */
    function __construct(ProfilRepository $repository, EntityManagerInterface $om) {
        $this->repository = $repository;
        $this->om = $om;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $profils = $this->repository->findAll();
        return $this->render('admin/admin.html.twig', [
            'profils' => $profils,
        ]);
    }
}
