<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ProfilRepository;
use App\Entity\Profil;

class AdminProfilsController extends AbstractController
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

    #[Route('/admin/utilisateurs', name: 'admin.utilisateurs')]
    public function index(): Response
    {
        $profils = $this->repository->findAll();
        return $this->render('admin/admin.utilisateurs.html.twig', [
            'profils' => $profils,
        ]);
    }

    // TODO edit message succes
    // 'Le profil NOM PRENOM a été supprimé avec succès'

    #[Route('/admin/suppr/{id}', name: 'admin.utilisateur.suppr')]
    public function suppr(Profil $profil): Response{
        $this->om->remove($profil);
        $this->om->flush();
        $this->addFlash('success',
            'Le profil a été supprimé avec succès.'
        );
        return $this->redirectToRoute('admin.utilisateurs');
    }
}
