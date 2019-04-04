<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IniciacaoCientificaController extends AbstractController
{
    /**
     * @Route("/iniciacao/cientifica", name="iniciacao_cientifica")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/IniciacaoCientificaController.php',
        ]);
    }
}
