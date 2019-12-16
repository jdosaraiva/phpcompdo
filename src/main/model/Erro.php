<?php

namespace saraiva\phpcompdo\main\model;

use Exception;

class Erro
{
    public static function trataErro(Exception $e)
    {
        if (DEBUG) {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
        } else {
            echo $e->getMessage();
        }
        exit;
    }
}
