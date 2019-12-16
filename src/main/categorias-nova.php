<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Criar Nova Categoria</h2>
    </div>
</div>
<div class="col-md-12">
<form action="/categorias-nova-post.php" method="POST">
  <div class="form-group">
    <label for="categoria">Nome:</label>
    <input type="text" class="form-control" placeholder="categoria" id="categoria" name="categoria">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>    
</div>
<?php require_once 'rodape.php' ?>