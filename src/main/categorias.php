<?php
require_once 'cabecalho.php';
use saraiva\phpcompdo\main\dao\CategoriaDAO;
use saraiva\phpcompdo\main\model\Erro;

$lista = [];
try {
    $categoriaDao = new CategoriaDAO();
    $lista = $categoriaDao->listar();
} catch (Exception $e) {
    Erro::trataErro($e);
}

?>
<div class="row">
    <div class="col-md-12">
        <h2>Categorias</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="categorias-nova.php" class="btn btn-info btn-block">Crair Nova Categoria</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10%;">Id</th>
                <th style="width: 70%;">Nome</th>
                <th style="width: 10%;" class="acao">Editar</th>
                <th style="width: 10%;" class="acao">Excluir</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($lista as $linha) : ?>
            <tr>
                <td style="width: 10%;"><a href="/categorias-detalhe.php" 
                    class="btn btn-link"><?php echo $linha['id'] ?></a></td>
                <td style="width: 70%;"><a href="/categorias-detalhe.php" 
                    class="btn btn-link"><?php echo $linha['nome'] ?></a></td>
                <td style="width: 10%;"><a href="/categorias-editar.php?id=<?php echo $linha['id'] ?>" 
                    class="btn btn-info">Editar</a></td>
                <td style="width: 10%;"><a href="/categorias-excluir.php?id=<?php echo $linha['id'] ?>"
                    class="btn btn-danger">Excluir</a></td>
            </tr>
            <?php endforeach ?>    
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>