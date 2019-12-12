<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '..\..\vendor\autoload.php';

use saraiva\phpcompdo\main\model\Categoria;

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
  
<div class="container">
  <h1>PHP com PDO parte 1: Persistindo os bancos de dados</h1>
  <br/>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Categoria</th>
      </tr>
    </thead>
    <tbody>
  <?php
    $categoria = new Categoria();
    $lista = $categoria->listar();  

    foreach ($lista as $linha) {
        echo "<tr>" . PHP_EOL;
        echo "<td>{$linha['id']}</td>" . PHP_EOL;
        echo "<td>{$linha['nome']}</td>" . PHP_EOL;
        echo "</tr>" . PHP_EOL;
    }

  ?>
    </tbody>
  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
