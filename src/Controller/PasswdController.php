<?php

namespace App\Controller;

use App\Entity\Passwd;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PasswdController extends AbstractController
{
    #[Route('/passwd', name: 'app_passwd')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $passwds = $entityManager->getRepository(Passwd::class)->findAll();

        return $this->render('passwd/index.html.twig', [
            'passwds' => $passwds,
        ]);
    }
}
