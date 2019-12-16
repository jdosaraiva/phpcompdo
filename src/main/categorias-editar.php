<?php

use saraiva\phpcompdo\main\dao\CategoriaDAO;
use saraiva\phpcompdo\main\model\Erro;

try {
    require_once 'cabecalho.php';
    $id = $_GET['id'];
    $dao = new CategoriaDAO();
    $categoria = $dao->findById($id);
} catch (Exception $e) {
    Erro::trataErro($e);
}

?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>
<div class="col-md-12">
<form action="/categorias-editar-post.php" method="POST">
    <div class="form-group">
        <label for="id">Id:</label>
        <label><?php echo $categoria->id ?></label>
        <input type="hidden" id="id" name="id" value="<?php echo $categoria->id ?>">
    </div>
    <div class="form-group">
        <label for="categoria">Nome:</label>
        <input type="text" class="form-control" value="<?php echo $categoria->nome ?>"
            placeholder="categoria" id="categoria" name="categoria">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>    
</div>
<?php require_once 'rodape.php' ?>