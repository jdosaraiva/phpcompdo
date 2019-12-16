<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once '..\..\vendor\autoload.php';

use saraiva\phpcompdo\main\dao\CategoriaDAO;
use saraiva\phpcompdo\main\model\Categoria;

$nomeCategoria = htmlspecialchars($_POST['categoria']);
$dao = new CategoriaDAO();
$categoria = new Categoria($nomeCategoria);

$dao->inserir($categoria);
header('Location: /categorias.php');
