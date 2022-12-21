<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BilanController extends AbstractController
{
    #[Route('/bilan', name: 'app_bilan')]
    public function index(): Response
    {
        return $this->render('bilan/index.html.twig', [
            'controller_name' => 'BilanController',
        ]);
    }

    #[Route('/bilan1', name: 'app_bilan1')]
    public function bilan1(): Response
    {
        return $this->render('bilan/index.html.twig', array('_fragment' => 'bilan1'),[
            'controller_name' => 'BilanController',
        ]);
    }
}
