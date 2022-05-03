<div class="titulo">Desafio Include</div>


<?php


require_once('usuario.php');


$usuario = new Usuario('Davi Moura', 22, 'davi455465');
$usuario->apresentar();