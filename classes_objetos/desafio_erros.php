<div class="titulo">Desafio Erros</div>

<?php
// interface Template{
//     function metodo1();
//     public function metodo2($parametro);
// }


// abstract class ClasseAbstrata extends Template {
//     public function metodo3(){
//         echo "Estou funcionando";
//     }
// }

// class Classe implements ClasseAbstrata {
//     function __construct($parametro) {

//     }
// }

// $exemplo = Classe();
// $exemplo.metodo3();

interface Template{
    function metodo1();
    public function metodo2($parametro);
}


abstract class ClasseAbstrata implements Template {
    function metodo1(){
        echo "Metodo 1 funcionando <br>";
    }

    public function metodo2($parametro){
        echo "Esta funcionado metodo2 <br>";
    }

    public function metodo3(){
        echo "Estou funcionando <br>";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro) {

    }
}



$exemplo = new Classe('$parametro');
$exemplo->metodo1();
$exemplo->metodo2('aaaaa');
$exemplo->metodo3();