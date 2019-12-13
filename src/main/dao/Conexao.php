<?php

namespace saraiva\phpcompdo\main\dao;

use PDO;

class Conexao
{
    public static function getConexao()
    {
        $conexao = new PDO('pgsql:host=localhost;port=5432;dbname=estoque;user=saraiva;password=conam$008');
        return $conexao;
    }
}
