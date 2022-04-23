<div class="titulo">Tipo String</div>

<?php

// AULA 44

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';


// CONCATENAÇÃO
// Operador de concatenação no php é o PONTO .


echo "Nós também" . 'somos';

echo '<br>',"Também aceito", "virgulas"; 
//somente o echo concatena com virgula, mas outros lugares somente o ponto concatena

echo '<br>';

// ALGUMAS FUNCOES

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('minimIZado');
echo '<br>' . ucfirst('so a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('quantas letras');

