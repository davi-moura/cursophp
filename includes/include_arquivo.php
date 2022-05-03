<?php
echo 'Carregando: include_arquvo<br>';

$variavel = 'Estou definida';

if(!function_exists(soma)){
    function soma ($a, $b){
        return $a + $b;
    }
}
