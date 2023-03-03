<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use App\DAO\MySQL\GerenciadorDeLojas\LojasDAO;
use App\Models\MySQL\GerenciadorDeLojas\LojaModel;


final class LojaController
{
    public function getLojas(Request $request, Response $response, array $args)
    {
        $lojasDAO = new LojasDAO();
        $lojas = $lojasDAO->getAllLojas();
        $response = $response->getBody()->write(json_encode($lojas));
        return $response;
    }

    public function insertLoja(Request $request, Response $response, array $array)
    {
        $data = (array)$request->getParsedBody();

        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();
        $loja->setNome($data['nome'])->setEndereco($data['endereco'])->setTelefone($data['telefone']);
        $lojasDAO->insertLojas($loja);

        $response = $response->getBody()->write(json_encode([
            'message' => 'Loja inserida com sucesso!'
        ]));
        return $response;
    }


    public function updateLoja(Request $request, Response $response, array $args)
    {
        $data = $request->getParsedBody();

        $lojasDAO = new LojasDAO();
        $loja = new LojaModel();
        $loja->setId((int)$data['id'])->setNome($data['nome'])->setEndereco($data['endereco'])->setTelefone($data['telefone']);
        $lojasDAO->updateLoja($loja);

        $response = $response->getBody()->write(json_encode([
            'message' => 'Loja alterada com sucesso!'
        ]));

        return $response;
    }


    public function deleteLoja(Request $request, Response $response, array $args)
    {
        $queryParams = $request->getQueryParams();
        $lojasDAO = new LojasDAO();
        $id = (int)$queryParams['id'];
        $lojasDAO->deleteLoja($id);

        $response = $response->getBody()->write(json_encode([
            'message' => 'Loja excluída com sucesso!'
        ]));

        return $response;
    }
}
