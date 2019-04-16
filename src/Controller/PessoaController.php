<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;

use Uspdev\Replicado\Pessoa;

class PessoaController extends AbstractController
{
    /**
     * @Route("/pessoa/servidores/total/ativos", name="pessoa_servidores_total_ativos")
     */
    public function servidoresTotalAtivos()
    {
        $total = Pessoa::totalVinculo('Servidor', getenv('REPLICADO_UNIDADE'));
        $response = new Response();
        $response->setContent(json_encode($total));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    /**
     * @Route("/pessoa/docentes/total/ativos", name="pessoa_docentes_total_ativos")
     */
    public function docentesTotalAtivos()
    {
        $total = Pessoa::totalVinculo('Docente', getenv('REPLICADO_UNIDADE'));
        $response = new Response();
        $response->setContent(json_encode($total));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    /**
     * @Route("/pessoa/graduacao/total/ativos", name="pessoa_graduacao_total_ativos")
     */
    public function graduacaoTotalAtivos()
    {
        $total = Pessoa::totalVinculo('Aluno de Graduação', getenv('REPLICADO_UNIDADE'));
        $response = new Response();
        $response->setContent(json_encode($total));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
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
