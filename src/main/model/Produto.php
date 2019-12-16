<?php

namespace saraiva\phpcompdo\main\model;

class Produto
{
    private $id;
    private $nome;
    private $preco;
    private $quantidade;
    private $categoria;

    public function __construct($id, $nome, $preco, $quantidade, $categoria)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->categoria = $categoria;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
