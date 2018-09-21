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
        $image = 'https://chatfaitdubien.fr/wp-content/uploads/2016/09/chaton-1080x675.jpg';

        return $this->render('chaton/index.html.twig', [
            'controller_name' => 'ChatonController',
            'image_chaton' => $image
        ]);
    }

    /**
     * @Route("/chiot", name="chiot")
     */
    public function chiot()
    {
        $image = 'https://static.actu.fr/uploads/2018/06/puppy-1903313-854x569.jpg';

        return $this->render('chaton/chiot.html.twig', [
            'controller_name' => 'ChatonController',
            'image_chiot' => $image
        ]);
    }
}
