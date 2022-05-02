<div class="titulo">Modificador Final</div>


<?php

abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2() {
        echo "Não vou mudar !<br>";
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo "Exetendendo metodo1<br>";
    }

    // public function metodo2() {
    //     echo "Exetendendo metodo12br>";
    // }
}


//AO USAR O FINAL: não gera herança e nem tão pouco pode se alterar coisas dentro de uma class com o FINAL.

//UTIL  para quando tiver um comportamento q n pode ser mudado e tem q ser respeitado, ou q n pode ser herdado para sobrescrista/auteração


$classe = new Classe();
$classe->metodo1();
$classe->metodo2();


final class Unica {
    public $att = 'valor unico';
}


$unica = new Unica();
echo $unica->att;
// class Duplicata extends Unica {
//     public $att2;
// }