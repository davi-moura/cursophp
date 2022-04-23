<div class="titulo">Desafio Impressão</div>

<!-- 
Enunciado:
- Imprima apenas os valores do array que contém indice par
- Desafio adicional: Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE
 -->
<?php

$array =[
   0 => "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
];


foreach($array as $index => $indice){
    if($index %2 !== 0)continue;
    echo "$indice <br>";
}

echo '<hr>';

for($i=0; $i <=count($array); $i++){
    if($i %2 === 1 )continue;
    echo "{$array[$i]} <br>";    
};
