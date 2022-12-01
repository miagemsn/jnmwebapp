<?php

namespace App\Controller;

use App\Entity\Sponsor;
use App\Form\SponsorType;
use Symfony\Bridge\Doctrine\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FormuController extends AbstractController
{
    #[Route('/formu', name: 'app_formu')]
    public function index(): Response
    {
        return $this->render('formu/index.html.twig', [
            'controller_name' => 'FormuController',
        ]);
    }

    /**
     * @Route("/formu",name="formulaiRE")
     **/
    public function afficherFor (ManagerRegistry $doctrine ):Response
    {
        $entityManage=$doctrine->getManager();
        $sponsor=new Sponsor();
        $form=$this-> createForm(SponsorType::class,$sponsor);
        return $this->render('formu\index.html.twig',[
            'formulaire'=>$form->createView()
        ]);

    }
}
