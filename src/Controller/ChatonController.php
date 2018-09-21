<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChatonController extends AbstractController
{
    /**
     * @Route("/chaton", name="chaton")
     */
    public function index()
    {
        return $this->render('chaton/index.html.twig', [
            'controller_name' => 'ChatonController',
        ]);
    }
}
