<?php namespace App; ?>


<div class="titulo">Sub-Namespaces</div>


<?php

echo __NAMESPACE__ . '<br>';
const constante = 123;
// echo constante . '<br>';


namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const constante = 456;


namespace App\Principal\Especifico;
echo __NAMESPACE__ . '<br>';
const constante = 789;

//resumo, namespaces é como se fosse pastas para colocar um codigo, pastas definidas dentro de um codigo

echo \App\constante . '<br>';
echo \App\Principal\constante . '<br>';
echo \App\Principal\Especifico\constante . '<br>';
// echo App\Principal\constante . '<br>';


