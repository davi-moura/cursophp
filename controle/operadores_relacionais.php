<div class="titulo">Operadores Relacionais</div>

<?php

var_dump(1 == 1); // true igual
var_dump(1 > 1); // false meno
var_dump(1 >= 1); // true meno ou igual
var_dump(4 < 23); // true maior
var_dump(1 <= 7); // true maior ou igual
var_dump(1 != 1); // false diferente
var_dump(1 <> 1); // false diferente

var_dump(111 == '111'); // true igual
var_dump(111 === '111'); // false estritamente igual
var_dump(111 != '111'); // false diferente
var_dump(111 !== '111'); // true estritamente diferente

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 15;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif($idade <= 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos!";
}

echo '<p class="divisao">Spaceship</p><hr>';
// var_dump(500 <=> 3);
// var_dump(50 <=> 50);
// var_dump(5 <=> 50);


echo '<p class="divisao">Valores pode ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");

