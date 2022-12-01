<?php

namespace App\Controller;

use App\Form\SponsorType;
use App\Repository\SponsorRepository;
use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sponsor;


class NazforController extends AbstractController
{
    private $repository;

    private $om;

    function __construct(SponsorRepository $repository, EntityManagerInterface $om)
    {
        $this->repository = $repository;
        $this->om = $om;
    }

    #[Route('/nazfor', name: 'app_nazfor')]
    public function index(): Response
    {
        return $this->render('nazfor/index.html.twig', [
            'controller_name' => 'NazforController',
        ]);
    }


    /**
     * @Route ("nazfor22",name="FOR2")
     */

    public function create(Request $request,ObjectManager $manager)
    {
        $sponsor=new Sponsor();
        $form=$this->createFormBuilder($sponsor)
                   ->add('nom')
                   ->getForm();

                   return $this->render('nazfor/index.html.twig',[
                       'izan' => $form->createView()
                   ]);
    }

}


