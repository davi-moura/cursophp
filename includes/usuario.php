<?php

require_once('pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login){
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "Usuario criado. <br>";
    }


    function __destruct(){
        echo"Usuario: desalocado/memoria liberada/destruct";
    }

    public function apresentar(){
        // {$this->nome}, {$this->idade} anos.<br>
        echo "@{$this->login}: ";
        parent::apresentar();
        //chamar uma funcao da superclasse, a classe que vc(classe Usuario) herdou
    }
}