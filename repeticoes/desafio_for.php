<div class="titulo">Desafio For</div>

<!-- 
Usar o For...

#
##
###
####
#####

1- Pode usar incremento $i ++
2- Não pode usar incremento $i ++
 -->

<?php


$impressao = '';
for($cont = 1; $cont <= 5; $cont++){
    $impressao .= '#';
    echo $impressao .'<br>';
}

echo '<hr>';
// PRIMEIRO: Valor que começa o laço de contagem
// SEGUNDO: Definição do limite de até onde vai a contagem, quando bater o valor, sai do laço
// TERCEIRO: Incrementar para o laço chegar ao seu limite definido na segunda parte
for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#'){
    echo "$impressao2 <br>";
}






// =======================================================================================================









// $dados = [
//     '#',
//     '##',
//     '###',
//     '####',
//     '#####',
// ];

// print_r($dados);
// for($i = 0; $i <= count($dados); $i++){
//     echo "{$dados[$i]} <br> ";
// };


// for($i = 0; $i <= count($dados); $i++){
//     echo "{$dados[$i]} <br> ";
// };