<div class="titulo">Desafio Recursão</div>

<?php

/*
$array =[1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

> 1
> 2
>> 3
>> 4
>> 5
> 6
>> 7
>>> 8
>>> 9
> 10

*/


$array =[1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

// var_dump($array);

function imprimirArray($array, $index = '>'){
    foreach($array as $elemento){
        if(is_array($elemento)){
            imprimirArray($elemento, $index . $index[0]);
        }
        else{
            echo "$index $elemento<br>";
        }
    }
}



imprimirArray($array);