<?php

class Pessoa {
    //visivel fora da classe, atributo publico (public)
    public $nome;
    public $idade;

    //visivel somente dentro da classe
    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "objeto de pessoa criada. <br>";
    }

    //visivel somente dentro da classe
    function __destruct(){
        echo "Pessoa: desalocado/memoria liberada/destruct";
    }


    //visivel fora da classe, funcao publica
    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}