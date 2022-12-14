<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrthoptieController extends AbstractController
{
    #[Route('/orthoptie', name: 'app_orthoptie')]
    public function index(): Response
    {
        return $this->render('orthoptie/index.html.twig', [
            'controller_name' => 'OrthoptieController',
        ]);
    }
}
