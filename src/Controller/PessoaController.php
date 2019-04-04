<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;

class PessoaController extends AbstractController
{
    /**
     * @Route("/pessoa/servidores/total/ativos", name="pessoa_servidores_total_ativos")
     */
    public function servidoresTotalAtivos()
    {
        $response = new Response();
        $response->setContent(json_encode([321312]));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    /**
     * @Route("/pessoa/docentes/total/ativos", name="pessoa_docentes_total_ativos")
     */
    public function docentesTotalAtivos()
    {
        $response = [475];
        return $this->json($response);
    }

    /**
     * @Route("/pessoa/graduacao/total/ativos", name="pessoa_graduacao_total_ativos")
     */
    public function graduacaoTotalAtivos()
    {
        $response = [455];
        return $this->json($response);
    }

    /**
     * @Route("/pessoa/pos/total/ativos", name="pessoa_pos_total_ativos")
     */
    public function posTotalAtivos()
    {
        $response = [115];
        return $this->json($response);
    }
}
