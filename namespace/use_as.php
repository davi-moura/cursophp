<?php namespace Outro\Nome; ?>

<div class="titulo">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';

include ('use_as_arquivo.php');

function soma($a, $b) {
    return $a . $b;
}


class Classe {
    public $var;

    function func() {
        echo __NAMESPACE__ . '->' .
             __CLASS__ . '->' .
             __METHOD__ . '<br>';
    }
}


echo Nome\Bem\Grande\constante . '<br>';