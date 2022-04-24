<div class="titulo">Desafio Palindromo</div>


<form action="#" method="post">
    <p>Insira um nome para verificar palindromo</p>
    <input type="text" name="nome">
    <button>Chekar</button>
</form>


<?php

// strrev()
$nome = $_POST['nome'] ?? "davi";


//api string
function chekarPalindromoapi($nomerecebidoapi){
    if(strrev($nomerecebidoapi) == $nomerecebidoapi){
        return 1;
    } else {
        return 0;
    }
};
//na mão
function chekarPalindromo($nomerecebido){
    $ultimaletra = strlen($nomerecebido) -1;
    for($i = 0; $i <= $ultimaletra; $i++){
        if($nomerecebido[$i] !== $nomerecebido[$ultimaletra - $i]){
            return 0;
        }
    };
    return 1;
};

//api string
if(chekarPalindromoapi($nome) == 1){
    echo "O nome {$nome} é um Palindromo!";
} else {
    echo "O nome {$nome} não é um Palindromo!";
};


//na mão
if(chekarPalindromo($nome)  == 1){
    echo "O nome {$nome} é um Palindromo!";
} else {
    echo "O nome {$nome} não é um Palindromo!";
};
// echo chekarPalindromo($nome);