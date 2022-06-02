<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos ";
    }
}