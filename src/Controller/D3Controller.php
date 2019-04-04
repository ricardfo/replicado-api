<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;

class D3Controller extends AbstractController
{

    /**
     * @Route("/d3/iniciacao-cientifica/bolsas", name="iniciacao_cientifica_bolsas_d3")
     */
    public function bolsasD3()
    {
        $response = new Response();

$dataset = "{
  'dataByTopic': [
    {
      'topic': 0,
      'dates': [
        {
          'date': '2015-06-27T07:00:00.000Z',
          'value': 1,
          'fullDate': '2015-06-27T07:00:00.000Z'
        }, {
          'date': '2015-06-28T07:00:00.000Z',
          'value': 1,
          'fullDate': '2015-06-28T07:00:00.000Z'
        }, {
          'date': '2015-06-29T07:00:00.000Z',
          'value': 4,
          'fullDate': '2015-06-29T07:00:00.000Z'
        }, {
          'date': '2015-06-30T07:00:00.000Z',
          'value': 2,
          'fullDate': '2015-06-30T07:00:00.000Z'
        }
      ],
      'topicName': 'CnpQ'
    }, {
      'topic': 1,
      'dates': [
        {
          'date': '2015-06-27T07:00:00.000Z',
          'value': 52,
          'fullDate': '2015-06-27T07:00:00.000Z'
        }, {
          'date': '2015-06-28T07:00:00.000Z',
          'value': 21,
          'fullDate': '2015-06-28T07:00:00.000Z'
        }, {
          'date': '2015-06-29T07:00:00.000Z',
          'value': 23,
          'fullDate': '2015-06-29T07:00:00.000Z'
        }, {
          'date': '2015-06-30T07:00:00.000Z',
          'value': 87,
          'fullDate': '2015-06-30T07:00:00.000Z'
        }
      ],
      'topicName': 'Fapesp'
    }, {
      'topic': 2,
      'dates': [
        {
          'date': '2015-06-27T07:00:00.000Z',
          'value': 31,
          'fullDate': '2015-06-27T07:00:00.000Z'
        }, {
          'date': '2015-06-28T07:00:00.000Z',
          'value': 73,
          'fullDate': '2015-06-28T07:00:00.000Z'
        }, {
          'date': '2015-06-29T07:00:00.000Z',
          'value': 61,
          'fullDate': '2015-06-29T07:00:00.000Z'
        }, {
          'date': '2015-06-30T07:00:00.000Z',
          'value': 40,
          'fullDate': '2015-06-30T07:00:00.000Z'
        }
      ],
      'topicName': 'FFLCH'
    } 
  ]
}";

        $response->setContent(json_encode($dataset));
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
