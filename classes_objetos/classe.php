<div class="titulo">Primeria Classe</div>

<?php

class Cliente{
    public $nome = 'Davi';
    public $idade = 22;

    public function eu(){
        return "{$this->nome} {$this->idade}";
    }
}


$c1 = new CLiente();
$c1->nome = 'davimoura';
$c1->idade = 21;
echo $c1->eu(). '<br>';

$c2 = new Cliente();
echo $c2->eu();