<?php

use saraiva\phpcompdo\main\dao\CategoriaDAO;
use saraiva\phpcompdo\main\model\Categoria;
use saraiva\phpcompdo\main\model\Erro;

ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once '..\..\vendor\autoload.php';

try {
    $id = $_POST['id'];
    $nome = $_POST['categoria'];
    $dao = new CategoriaDAO();
    $categoria = new Categoria($id, $nome);
    $dao->update($categoria);

    header('Location: /categorias.php');
} catch (Exception $e) {
    Erro::trataErro($e);
}
