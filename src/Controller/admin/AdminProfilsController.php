<?php

namespace App\Controller\admin;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;

class AdminProfilsController extends AbstractController
{
    /**
     *
     * @var UserRepository
     */
    private $repository;
    /**
     *
     * @var EntityManagerInterface
     */
    private $om;
    /**
     *
     * @param UserRepository $repository
     * @param EntityManagerInterface $om
     */
    function __construct(UserRepository $repository, EntityManagerInterface $om) {
        $this->repository = $repository;
        $this->om = $om;
    }

    #[Route('/admin/utilisateurs', name: 'admin.users')]
    public function index(): Response
    {
        $users = $this->repository->findAll();
        return $this->render('admin/admin.users.html.twig', [
            'users' => $users,
        ]);
    }

    // TODO edit message succes
    // 'Le profil NOM PRENOM a été supprimé avec succès'

    #[Route('/admin/utilisateur/suppr/{id}', name: 'admin.user.delete')]
    public function suppr(User $user): Response{
        $this->om->remove($user);
        $this->om->flush();
        $this->addFlash('success',
            'Le profil a été supprimé avec succès.'
        );
        return $this->redirectToRoute('admin.users');
    }
}
