<?php
require_once 'cabecalho.php';
use saraiva\phpcompdo\main\dao\ProdutoDAO;
use saraiva\phpcompdo\main\model\Erro;

$produtos = [];
try {
    $dao = new ProdutoDAO();
    $produtos = $dao->findAll();
} catch (Exception $e) {
    Erro::trataErro($e);
}

?>
<div class="row">
    <div class="col-md-12">
        <h2>Produtos</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="categorias-nova.php" class="btn btn-info btn-block">Criar Novo Produto</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
            <tr>
                <th style="width: 10%;">Id</th>
                <th style="width: 30%;">Nome</th>
                <th style="width: 10%; text-align:center;">Preço</th>
                <th style="width: 10%; text-align:center;">Quantidade</th>
                <th style="width: 20%;">Categoria</th>
                <th style="width: 10%;" class="acao">Editar</th>
                <th style="width: 10%;" class="acao">Excluir</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produtos as $produto) : ?>
            <tr>
                <td style="width: 10%;"><a href="/produtos-detalhe.php?id=<?php echo $produto->id ?>" 
                    class="btn btn-link"><?php echo $produto->id ?></a></td>
                <td style="width: 30%;"><a href="/produtos-detalhe.php?id=<?php echo $produto->id ?>" 
                    class="btn btn-link"><?php echo $produto->nome ?></a></td>
                <td style="width: 10%; text-align:right; ">
                    <?php echo "R$ " . number_format($produto->preco, 2, ',', '.') ?>
                </td>
                <td style="width: 10%; text-align:right;"><?php echo $produto->quantidade ?></td>
                <td style="width: 20%;"><?php echo $produto->categoria->nome ?></td>
                <td style="width: 10%;"><a href="/produtos-editar.php?id=<?php echo $produto->id ?>" 
                    class="btn btn-info">Editar</a></td>
                <td style="width: 10%;"><a href="/produtos-excluir.php?id=<?php echo $produto->id ?>"
                    class="btn btn-danger">Excluir</a></td>
            </tr>
            <?php endforeach ?>    
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>