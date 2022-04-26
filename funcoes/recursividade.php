<div class="titulo">Recursividade</div>

<?php



function somaUmate($recebenumero){
    $soma = 0;
    for($i = 1; $i <= $recebenumero; $i++){
        $soma += $i;
    }
    return $soma;
}
echo somaUmate(4) . "<br>" ;  
echo recursividadeSomaumate(4). "<br>" ;
echo recursividadeSomaumateECOM(4);


function recursividadeSomaumate($recebenumero){
    if($recebenumero === 1){
        return 1;
    }
    return $recebenumero + recursividadeSomaumate($recebenumero - 1);
};

function recursividadeSomaumateECOM($recebenumero){
    return $recebenumero === 1 ? 1 : $recebenumero + recursividadeSomaumateECOM($recebenumero - 1);
}