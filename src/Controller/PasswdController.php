<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PasswdController extends AbstractController
{
    #[Route('/passwd', name: 'app_passwd')]
    public function index(): Response
    {
        return $this->render('passwd/index.html.twig', [
            'controller_name' => 'PasswdController',
        ]);
    }
}
