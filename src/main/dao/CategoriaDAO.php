<?php

namespace saraiva\phpcompdo\main\dao;

use saraiva\phpcompdo\main\dao\Conexao;
use saraiva\phpcompdo\main\model\Categoria;

class CategoriaDAO
{
    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::getConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir(Categoria $categoria)
    {
        $query = "INSERT INTO categorias (nome) VALUES ('" . $categoria->nome . "')";
        $conexao = Conexao::getConexao();
        $conexao->exec($query);
    }
}
