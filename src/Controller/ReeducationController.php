<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReeducationController extends AbstractController
{
    #[Route('/reeducation', name: 'app_reeducation')]
    public function index(): Response
    {
        return $this->render('reeducation/index.html.twig', [
            'controller_name' => 'ReeducationController',
        ]);
    }
}
