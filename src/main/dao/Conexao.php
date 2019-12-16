<?php

namespace saraiva\phpcompdo\main\dao;

use PDO;

class Conexao
{
    public static function getConexao()
    {
        $conexao = new PDO(DB_DRIVE
            . ":host=" . DB_HOSTNAME . ";port=5432;dbname="
            . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }
}
