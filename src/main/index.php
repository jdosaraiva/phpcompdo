<?php

use saraiva\phpcompdo\main\dao\CategoriaDAO;
use saraiva\phpcompdo\main\model\Erro;

require_once 'cabecalho.php' ?>
    <div class="col-md-12">
        <h2>Seja bem-vindo ao Sistema de Controle de Estoque</h2>
        <p>Selecione uma das opções do Menu para começar a usar o Sistema</p>
        <?php

        try {
            $dao = new CategoriaDAO();
            $categoria = $dao->findById(2);
            echo '<pre>';
            var_dump($categoria);
            echo '</pre>';
        } catch (Exception $e) {
            Erro::trataErro($e);
        }

        ?>
    </div>
<?php require_once 'rodape.php' ?>