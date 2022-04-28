<div class="titulo">Visibilidade</div>

<?php

class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Serei transmitido por herança!<br>';
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!<br>';
    }
}

$a = new A();
$a->mostrarA();
// $a->naoMostrar();








//encapsulamento,
// public: é possivel acessar em qualquer lugar, apos chamar a class 
// protected: só é permitido/conseguido acessar dentro de outra class que herdou de herança de uma class pai, trnasmissão/acesso por herança
// private: é somente acessada pela sua class original, n é transmitido nem por hgenraça nem tão pouco publica






class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";

        // parent::vaiPorHeranca();
    }
}
echo '<br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
// $b->vaiPorHeranca();
// $b->naoMostrar();