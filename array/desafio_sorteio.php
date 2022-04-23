<div class="titulo">Desafio Sorteio</div>

<?php
$nome = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela", "Fiona"];


$index = array_rand($nome);
$nomefinal = $nome[$index];

echo "<h1>$nomefinal</h1>";