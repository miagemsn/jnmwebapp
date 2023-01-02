<?php

namespace App\Controller;

use App\Repository\LogementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogementsController extends AbstractController
{
    private const PAGELOGEMENTS = "public/logements.html.twig";

    /**
     *
     * @var LogementRepository
     */
    private $repository;
    /**
     *
     * @var EntityManagerInterface
     */
    private $om;
    /**
     *
     * @param LogementRepository $repository
     * @param EntityManagerInterface $om
     */
    function __construct(LogementRepository $repository, EntityManagerInterface $om) {
        $this->repository = $repository;
        $this->om = $om;
    }

    #[Route('/logements', name: 'public.logements')]
    public function index(): Response
    {
        $logements = $this->repository->findAll();
        return $this->render(self::PAGELOGEMENTS, [
            'logements' => $logements,
        ]);
    }
}
