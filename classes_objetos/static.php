<div class="titulo">Membros Estáticos</div>

<?php

class A {
    public $naoStatic = 'Variavel de instancia';
    public static $static = 'Variavel de classe (estatica)';


    public function mostrarA(){
        echo "Não estatico = {$this->naoStatic}<br>";
        //tentatica 1
        // echo "Estatica = {$this->static}<br>";
        //tentatica 2
        // echo "Estatica = {self::$static}<br>";
        //tentatica 3
        echo "Estatica = " . self::$static . "<br>";
    }
    
    //dentro de uma funcao static só se acessa estaticos
    public static function mostrarStaticA() {
        // echo "Não estático = {$this->naoStatic} <br>";
        // echo "estático = {$Static} <br>";
        echo "Estatica = " . self::$static . "<br>";
    }
}


$objeto = new A();
$objeto->mostrarA();
// $objeto->mostrarStaticA();
echo A::$static . "<br>";
//forma correta de ser acessar uma função estatica, que é publica,diretamente da classe
A::mostrarStaticA();



A::$static ='alterado o static';
echo A::$static . "<br>";