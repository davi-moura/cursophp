<div class="titulo">Arrays Constantes</div>

<?php

//as constantes no php depois de definidas nunca podem
//ser alteradas ou inseridas por instrução de codigos seguintes, apenas acessada.

const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS = 'teste';
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];