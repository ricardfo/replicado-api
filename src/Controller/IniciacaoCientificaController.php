<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IniciacaoCientificaController extends AbstractController
{
    /**
     * @Route("/iniciacao-cientifica/bolsas/{ano}", defaults={"ano"="current"}, name="iniciacao_cientifica_bolsas")
     */
    public function index($ano)
    {
        if($ano = "current") {
            $ano = date("Y");
        }

        $response = [
            2010 => [
                'cnpq' => 32,
                'fapesp' => 41,
                'unidade' => 78,
            ],
            2011 => [
                'cnpq' => 21,
                'fapesp' => 33,
                'unidade' => 90,
            ],
        ];

        return $this->json($response);
    }
}
