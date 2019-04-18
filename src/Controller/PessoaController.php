<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;

use Uspdev\Replicado\Pessoa;

class PessoaController extends AbstractController
{
    /**
     * @Route("/pessoa/vinculo/total/ativos/{tipvinext}", name="pessoa_vinculo_total_ativos")
     */
    public function totalVinculo($tipvinext)
    {
        $total = Pessoa::totalVinculo($tipvinext, getenv('REPLICADO_UNIDADE'));
        $response = new Response();
        $response->setContent(json_encode($total));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
    /**
     * @Route("/pessoa/pos/total/ativos/{nivpgm}", name="pessoa_pos_total_ativos")
     */
    public function totalPosNivelPrograma($nivpgm)
    {
        $total = Pessoa::totalPosNivelPrograma($nivpgm, getenv('REPLICADO_UNIDADE'));
        $response = new Response();
        $response->setContent(json_encode($total));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
