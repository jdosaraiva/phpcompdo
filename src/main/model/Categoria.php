<?php

namespace saraiva\phpcompdo\main\model;

class Categoria
{

    private $id;
    private $nome;

    public function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this, $f = '__construct' . $i)) {
            call_user_func_array(array($this, $f), $a);
        }
    }

    public function __construct1($a1)
    {
        $this->nome = $a1;
    }

    public function __construct2($a1, $a2)
    {
        $this->id =  $a1;
        $this->nome = $a2;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}
