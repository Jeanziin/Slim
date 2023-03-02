<?php

namespace App\DAO\MySQL\GerenciadorDeLojas;

abstract class Conexao
{
    // PDO

    protected $pdo;

    public function __construct()
    {
        $host = getenv('GERENCIADORDELOJAS_MYSQL_HOST');
        $port = getenv('GERENCIADORDELOJAS_MYSQL_PORT');
        $user = getenv('GERENCIADORDELOJAS_MYSQL_USER');
        $pass = getenv('GERENCIADORDELOJAS_MYSQL_PASSWORD');
        $dbname = getenv('GERENCIADORDELOJAS_MYSQL_DBNAME');

        $dsn = "mysql:host={$host};dbname={$dbname};port={$port}";

        $this->pdo = new \PDO($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }
}