<?php

namespace saraiva\phpcompdo\main\model;

use \PDO;

class Categoria
{
    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = new PDO('pgsql:host=localhost;port=5432;dbname=estoque;user=saraiva;password=conam$008');
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;

    }
}

?>