<?php

namespace saraiva\phpcompdo\main\dao;

use saraiva\phpcompdo\main\model\Categoria;
use saraiva\phpcompdo\main\model\Produto;

class ProdutoDAO
{

    public function insert(Produto $produto)
    {
    }

    public function update(Produto $produto)
    {
    }

    public function delete(Produto $produto)
    {
    }

    public function findAll(): array
    {

        $conexao = Conexao::getConexao();
        $query = "SELECT p.id, p.nome, p.preco, p.quantidade, p.categoria_id, c.nome as categoria "
            . "FROM produtos p JOIN categorias c ON p.categoria_id = c.id";
        $resultado = $conexao->query($query);
        $resultSet = $resultado->fetchAll();

        $lista = [];
        foreach ($resultSet as $row) {
            $categoria = new Categoria($row['categoria_id'], $row['categoria']);
            $produto = new Produto($row['id'], $row['nome'], $row['preco'], $row['quantidade'], $categoria);
            $lista[] = $produto;
        }
    
        return $lista;
    }

    public function findById($id): ?Produto
    {
        return new Produto(null, null, null, null, null);
    }

    public function findByCategoria($categoria): array
    {
        $conexao = Conexao::getConexao();
        $query = "SELECT p.id, p.nome, p.preco, p.quantidade, p.categoria_id, c.nome as categoria "
            . "FROM produtos p JOIN categorias c ON p.categoria_id = c.id "
            . "WHERE p.categoria_id = $categoria->id";
        $resultado = $conexao->query($query);
        $resultSet = $resultado->fetchAll();

        $lista = [];
        foreach ($resultSet as $row) {
            $categoria = new Categoria($row['categoria_id'], $row['categoria']);
            $produto = new Produto($row['id'], $row['nome'], $row['preco'], $row['quantidade'], $categoria);
            $lista[] = $produto;
        }
    
        return $lista;
    }
}
