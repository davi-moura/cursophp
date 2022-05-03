<div class="titulo">Include x Require</div>

<?php
ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php');

echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php');

echo 'Não achou mesmo... <br>';


//require: exige q o arquivo exista para continuar a renderização da pagina

//include: se o arquivo nao existe, ele n impede a renderização da pagina 