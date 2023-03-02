<?php

namespace App\Controllers;

use App\DAO\MySQL\GerenciadorDeLojas\LojasDAO;
use App\DAO\MySQL\GerenciadorDeLojas\ProdutosDAO;
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

final class ProductController
{
    public function getProducts(Request $request, Response $response, array $args): Response
    {
         $lojasDAO = new LojasDAO();
         $lojasDAO->teste();

            return $response;
        }
}