<?php

namespace App\Controller\admin;

use App\Entity\Activite;
use App\Form\ActiviteType;
use App\Repository\ActiviteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminActivitesController extends AbstractController
{
    private const PAGEADMINACTIVITES = "admin/activite/activites.html.twig";

    /**
     *
     * @var ActiviteRepository
     */
    private $repository;
    /**
     *
     * @var EntityManagerInterface
     */
    private $om;
    /**
     *
     * @param ActiviteRepository $repository
     * @param EntityManagerInterface $om
     */
    function __construct(ActiviteRepository $repository, EntityManagerInterface $om) {
        $this->repository = $repository;
        $this->om = $om;
    }

    #[Route('/admin/activites', name: 'admin.activites')]
    public function index(): Response
    {
        $activites = $this->repository->findAll();
        return $this->render(self::PAGEADMINACTIVITES, [
            'activites' => $activites,
        ]);
    }

    #[Route('/admin/activite/ajout/', name: 'admin.activite.add')]
    public function add(Request $request): Response {

        $activite = new Activite();
        $formActivite = $this->createForm(ActiviteType::class, $activite);
        $formActivite->handleRequest($request);

        if($formActivite->isSubmitted() && $formActivite->isValid()){
            $this->om->persist($activite);
            $this->om->flush();
            $this->addFlash('success',
                'L\'activité a été ajouté avec succès.'
            );
            return $this->redirectToRoute('admin.activites');
        }

        return $this->render('admin/activite/activite.ajout.html.twig', [
            'activite' => $activite,
            'formActivite' => $formActivite->createView()
        ]);
    }

    #[Route('/admin/activite/edit/{id}', name: 'admin.activite.edit')]
    public function edit(Activite $activite, Request $request): Response {
        $formActivite = $this->createForm(ActiviteType::class, $activite);
        $formActivite->handleRequest($request);
        if($formActivite->isSubmitted() && $formActivite->isValid()){
            $this->om->flush();
            $this->addFlash('success',
                'L\'activité a été modifiée avec succès.'
            );
            return $this->redirectToRoute('admin.activites');
        }

        return $this->render('admin/activite/activite.edit.html.twig', [
            'activite' => $activite,
            'formActivite' => $formActivite->createView()
        ]);
    }

    #[Route('/admin/activite/suppr/{id}', name: 'admin.activite.delete')]
    public function suppr(Activite $activite): Response{
        $this->om->remove($activite);
        $this->om->flush();
        $this->addFlash('success',
            'L\'activité a été supprimée avec succès.'
        );
        return $this->redirectToRoute('admin.activites');
    }
}
