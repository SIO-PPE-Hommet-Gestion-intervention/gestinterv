<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IntervController extends AbstractController
{
    /**
     * @Route("/interv", name="interv")
     */
    public function index()
    {
        return $this->render('interv/index.html.twig', [
            'controller_name' => 'IntervController',
        ]);
    }
}
