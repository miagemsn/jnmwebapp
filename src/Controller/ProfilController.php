<?php

namespace App\Controller;

use App\Entity\Profil;
use App\Form\ProfilType;
use App\Repository\ProfilRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ProfilController extends AbstractController
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

    // TODO Secure informations profil (cloisonnement horizontal)

    #[Route('/profil/{id}', name: 'profil')]
    public function index(Profil $profil, Request $request): Response
    {
        $formprofil = $this->createForm(ProfilType::class, $profil);

        $formprofil->handleRequest($request);
        if($formprofil->isSubmitted() && $formprofil->isValid()){
            $this->om->flush();
            $this->addFlash('success',
                'La formation a été modifiée avec succès.'
            );
            return $this->redirectToRoute('parametres');
        }

        return $this->render("profil.html.twig", [
            'profil' => $profil,
            'profilForm' => $formprofil->createView()
        ]);
    }

    #[Route('/profil/', name: 'parametres')]
    public function tmp()
    {
        return $this->render("profil.html.twig");
    }



}
