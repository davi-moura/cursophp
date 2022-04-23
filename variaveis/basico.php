<div class="titulo">Variaveis</div>

<?php
// pra criar variavel só colocar o $


// o = (simbolo de igual), é de atribuição pra variavel
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a +$b;
echo $somaDosNumeros;
//os tamanho e as letras tem q ser identicas nas variaveis, case sensitiv

echo '<br>';

echo isset ($somaDosNumeros);
//isset: verifica se uma variavel foi definida

//unset: desSETA/remove a variavel

echo '<br>';
echo isset($somaDosNumeros);

unset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

// Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar!
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);