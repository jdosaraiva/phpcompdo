<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once '..\..\vendor\autoload.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CURSO - PHP com PDO I</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" 
                data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Controle de Estoque</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">Controle de Estoque</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/categorias.php">Categorias</a></li>
                <li><a href="/produtos.php">Produtos</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<div class="container">