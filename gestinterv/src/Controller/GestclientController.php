<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GestclientController extends AbstractController
{
    /**
     * @Route("/gestclient", name="gestclient")
     */
    public function index()
    {
        return $this->render('gestclient/index.html.twig', [
            'controller_name' => 'GestclientController',
        ]);
    }
}
