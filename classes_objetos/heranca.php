<div class="titulo">Herença</div>

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


//herança/polimorfismo, tudo que a classe Pessoa tem o Usuario terá
//Usuario é uma extenção/expanssão da classe Pessoa
//Usuario, além de ter que a Pessoa tem poderá ter outras coisas
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


$usuario = new Usuario('Davi Moura', 22, 'davi455465');
$usuario->apresentar();