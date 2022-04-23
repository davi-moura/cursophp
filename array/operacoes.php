<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);// verificar se a variavel é um array ou nao
echo '<br>' . count($dadosCompletos);// contar os elementos q existe no array

echo '<br>';
$indice = array_rand($dadosCompletos);//pegar o indice de um array de forma randomica
echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo " ${dadosCompletos['idade']}";

//unset apaga um dado do array, deseta, aplicar null, liberar memoria
unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);


//array_merge une os array em vez de tentar somar, q n dar certo,
$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

//o sort ele organiza os dados do array
sort($decimais);
echo '<br>';
print_r($decimais);