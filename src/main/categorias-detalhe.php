<?php

use saraiva\phpcompdo\main\dao\CategoriaDAO;
use saraiva\phpcompdo\main\dao\ProdutoDAO;
use saraiva\phpcompdo\main\model\Erro;

require_once 'cabecalho.php';

try {
    $id = $_GET['id'];
    $dao = new CategoriaDAO();
    $produtoDao = new ProdutoDAO();
    $categoria = $dao->findById($id);
    if (!$categoria) {
        throw new Exception("Categoria não encontrada!");
    }
    $produtos = $produtoDao->findByCategoria($categoria);
} catch (Exception $e) {
    Erro::trataErro($e);
}

?>
<div class="row">
    <div class="col-md-12">
        <h2>Detalhe da Categoria</h2>
    </div>
</div>

<dl>
    <dt>ID</dt>
    <dd><?php echo $categoria->id ?></dd>
    <dt>Nome</dt>
    <dd><?php echo $categoria->nome ?></dd>
    <dt>Produtos</dt>
    <?php if (count($produtos) > 0) : ?>
    <dd>
        <ul>
        <?php foreach ($produtos as $produto) : ?>
            <li>
                <a href="/produtos-editar.php?id=<?php echo $produto->id ?>">
                    <?php echo $produto->nome ?>
                </a>
            </li>
        <?php endforeach ?>    
        </ul>
    </dd>
    <?php else : ?>
        <dd>Nenhum produto cadastrado</dd>
    <?php endif ?>    
</dl>
<?php require_once 'rodape.php' ?>
