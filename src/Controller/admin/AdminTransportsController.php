<?php

namespace App\Controller\admin;

use App\Entity\Transport;
use App\Form\TransportType;
use App\Repository\TransportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;

class AdminTransportsController extends AbstractController
{
    private const PAGEADMINTRANSPORTS = "admin/admin.transports.html.twig";

    /**
     *
     * @var TransportRepository
     */
    private $repository;
    /**
     *
     * @var EntityManagerInterface
     */
    private $om;
    /**
     *
     * @param TransportRepository $repository
     * @param EntityManagerInterface $om
     */
    function __construct(TransportRepository $repository, EntityManagerInterface $om) {
        $this->repository = $repository;
        $this->om = $om;
    }

    #[Route('/admin/transports', name: 'admin.transports')]
    public function index(): Response
    {
        $transports = $this->repository->findAll();
        return $this->render(self::PAGEADMINTRANSPORTS, [
            'transports' => $transports,
        ]);
    }

    #[Route('/admin/transport/ajout/', name: 'admin.transport.add')]
    public function add(Request $request): Response {
        $transport = new Transport();
        $formTransport = $this->createForm(TransportType::class, $transport);
        $formTransport->handleRequest($request);

        if($formTransport->isSubmitted() && $formTransport->isValid()){
            $this->om->persist($transport);
            $this->om->flush();
            $this->addFlash('success',
                'Le titre de transport a été ajouté avec succès.'
            );
            return $this->redirectToRoute('admin.transports');
        }

        return $this->render('admin/admin.transport.ajout.html.twig', [
            'transport' => $transport,
            'formTransport' => $formTransport->createView()
        ]);
    }

    #[Route('/admin/transport/edit/{id}', name: 'admin.transport.edit')]
    public function edit(Transport $transport, Request $request): Response {
        $formTransport = $this->createForm(TransportType::class, $transport);
        $formTransport->handleRequest($request);
        if($formTransport->isSubmitted() && $formTransport->isValid()){
            $this->om->flush();
            $this->addFlash('success',
                'Le titre de transport a été modifiée avec succès.'
            );
            return $this->redirectToRoute(self::PAGEADMINTRANSPORTS);
        }

        return $this->render(self::PAGEADMINTRANSPORTS, [
            'transport' => $transport,
            'formTransport' => $formTransport->createView()
        ]);
    }

    #[Route('/admin/transport/suppr/{id}', name: 'admin.transport.delete')]
    public function suppr(Transport $transport): Response{
        $this->om->remove($transport);
        $this->om->flush();
        $this->addFlash('success',
            'Le titre de transport a été supprimée avec succès.'
        );
        return $this->redirectToRoute('admin.transports');
    }
}
