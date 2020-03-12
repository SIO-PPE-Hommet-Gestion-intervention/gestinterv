<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DemandeController extends AbstractController
{
    /**
     * @Route("/demande", name="demande")
     */
    public function index()
    {
        return $this->render('demande/index.html.twig', [
            'controller_name' => 'DemandeController',
        ]);
    }
}
