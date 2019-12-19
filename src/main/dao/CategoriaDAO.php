<?php

namespace saraiva\phpcompdo\main\dao;

use saraiva\phpcompdo\main\dao\Conexao;
use saraiva\phpcompdo\main\model\Categoria;

class CategoriaDAO
{
    public function findAll()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function inserir(Categoria $categoria)
    {
        $query = "INSERT INTO categorias (nome) VALUES (:nome)";
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $categoria->nome);
        $stmt->execute();
    }

    public function delete(Categoria $categoria)
    {
        $query = "DELETE FROM categorias WHERE id = :id";
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $categoria->id);
        $stmt->execute();
    }

    public function update(Categoria $categoria)
    {
        $query = "UPDATE categorias SET nome = :nome WHERE id = :id";
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $categoria->nome);
        $stmt->bindValue(':id', $categoria->id);
        $stmt->execute();
    }

    public function findById($id): ?Categoria
    {
        $query = "SELECT id, nome FROM categorias WHERE id = :id";
        $conexao = Conexao::getConexao();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        $cat = null;
        if (!empty($lista)) {
            foreach ($lista as $row) {
                $cat = $row;
                break;
            }
        }

        $categoria = null;
        if ($cat) {
            $categoria = new Categoria($cat['id'], $cat['nome']);
        }

        return $categoria;
    }
}
