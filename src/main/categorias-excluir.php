<?php

use saraiva\phpcompdo\main\dao\CategoriaDAO;
use saraiva\phpcompdo\main\model\Erro;

ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once '..\..\vendor\autoload.php';

try {
    $id = $_GET['id'];
    $dao = new CategoriaDAO();
    $categoria = $dao->findById($id);
    if ($categoria) {
        $dao->delete($categoria);
    }

    header('Location: /categorias.php');
} catch (Exception $e) {
    Erro::trataErro($e);
}
