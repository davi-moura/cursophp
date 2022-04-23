<div class="titulo">Função Escopo</div>

<?php
function imprimirMensagens() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagens();
imprimirMensagens();
imprimirMensagens();

$variavel = 1;
//assim, ela somente altera a variavel interna, dentro do seu escopo
//e tbm só atua quando é invocada/chamda
function trocaValor() {
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";
//declarando a variavel com o global antes, indica ao PHP q vc quer acessar a variavel em questao fora do escopo da função
//assim, alterando com sucesso a variavel, e somente é alterada quando a função é chamada

//então escopo é tudo q está detro de uma função, como se fosse um mundo a parte
function trocaValorDeVerdade() {
    global $variavel;
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());