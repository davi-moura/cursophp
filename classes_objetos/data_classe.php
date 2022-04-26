<div class="titulo">Desafio Data Classe</div>

<?php

class Data{
    public $dia = 1 ;
    public $mes = 1;
    public $ano = 1970 ;


    public function Apresentar(){
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$niver = new Data();
$niver->dia = 06;
$niver->mes = 03;
$niver->ano = 2000;

echo $niver->Apresentar() . '<br>';


$campfla = new Data();
$campfla->dia = 23;
$campfla->mes = 11;
$campfla->ano = 2019;

echo $campfla->Apresentar();