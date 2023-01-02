<?php

namespace App\Controller\admin;

use App\Entity\Logement;
use App\Form\LogementType;
use App\Repository\LogementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminLogementsController extends AbstractController
{
    private const PAGEADMINLOGEMENTS = "admin/logement/logements.html.twig";

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

    #[Route('/admin/logements', name: 'admin.logements')]
    public function index(): Response
    {
        $logements = $this->repository->findAll();
        return $this->render(self::PAGEADMINLOGEMENTS, [
            'logements' => $logements,
        ]);
    }

    #[Route('/admin/logement/ajout/', name: 'admin.logement.add')]
    public function add(Request $request): Response {

        $logement = new Logement();
        $formLogement = $this->createForm(LogementType::class, $logement);
        $formLogement->handleRequest($request);

        if($formLogement->isSubmitted() && $formLogement->isValid()){
            $this->om->persist($logement);
            $this->om->flush();
            $this->addFlash('success',
                'Le logement a été ajouté avec succès.'
            );
            return $this->redirectToRoute('admin.logements');
        }

        return $this->render('admin/logement/logement.ajout.html.twig', [
            'logement' => $logement,
            'formLogement' => $formLogement->createView()
        ]);
    }

    #[Route('/admin/logement/edit/{id}', name: 'admin.logement.edit')]
    public function edit(Logement $logement, Request $request): Response {
        $formLogement = $this->createForm(LogementType::class, $logement);
        $formLogement->handleRequest($request);
        if($formLogement->isSubmitted() && $formLogement->isValid()){
            $this->om->flush();
            $this->addFlash('success',
                'Le logement a été modifiée avec succès.'
            );
            return $this->redirectToRoute('admin.logements');
        }

        return $this->render('admin/logement/logement.edit.html.twig', [
            'logement' => $logement,
            'formLogement' => $formLogement->createView()
        ]);
    }

    #[Route('/admin/logement/suppr/{id}', name: 'admin.logement.delete')]
    public function suppr(Logement $logement): Response{
        $this->om->remove($logement);
        $this->om->flush();
        $this->addFlash('success',
            'Le logement a été supprimée avec succès.'
        );
        return $this->redirectToRoute('admin.logements');
    }
}
