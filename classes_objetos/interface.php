<div class="titulo">Interface</div>

<?php
//uma interface define as funções que precisa ser implementadas a classe q for utilizar a tal interface
interface Animal {
    function respirar();
}
//a interface: obrigação de fazer aquela função, algo q precisa ser feito por padrao
interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero {
    function latir();
    function correr();
}

interface Felino {
    function correr();
}

//implements: a class cachorro ta recebendo as assinatura/obrigação de imprementar a função respirar() 
class Cachorro implements Canino {
    function respirar() {
        return "Irei usar oxigênio!";
    }

    function latir() {
        return 'Au Au';
    }

    function mamar() {
        return "Irei usar leite!";
    }

    function correr() {
        return "vrunnnnn!";
    }
}


$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);