<?php

use saraiva\phpcompdo\main\dao\CategoriaDAO;

require_once 'cabecalho.php' ?>
    <div class="col-md-12">
        <h2>Sejá bem-vindo ao Sistema de Controle de Estoque</h2>
        <p>Selecione uma das opções do Menu para começar a usar o Sistema</p>
        <?php

            $dao = new CategoriaDAO();
            $categoria = $dao->findById(2);
            echo '<pre>';
            var_dump($categoria);
            echo '</pre>';

        ?>
    </div>
<?php require_once 'rodape.php' ?>