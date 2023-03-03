<?php

namespace App\Controllers;

use App\DAO\MySQL\GerenciadorDeLojas\LojasDAO;
use App\DAO\MySQL\GerenciadorDeLojas\ProdutosDAO;
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ProdutoController
{
    public function getProdutos(Request $request, Response $response, array $args)
    {
        $response = $response->getBody()->write(json_encode([
            'message' => 'Hello world'
        ]));
        return $response;
    }

    public function insertProduto(Request $request, Response $response, array $array)
    {
        $response = $response->getBody()->write(json_encode([
            'message' => 'Hello world'
        ]));
        return $response;
    }

    
    public function updateProtudo(Request $request, Response $response, array $args)
    {
        $response = $response->getBody()->write(json_encode([
            'message' => 'Hello world'
        ]));
        return $response; 
    }

    
    public function deleteProduto(Request $request, Response $response, array $args)
    {
        $response = $response->getBody()->write(json_encode([
            'message' => 'Hello world'
        ]));
        return $response;
    }

}