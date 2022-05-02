<div class="titulo">Traits #01</div>

<?php
//uma forma de re-uso de codigo q é diferente da herança
//usado a partir de composição
trait validacao {
    public $a = 'Valor a';
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

//o trim tira os espaços em branco da string
trait validacaoMelhor {
    public $b = 'Valor b';

    private $c = 'valor c privado';
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}


//diferente de extends, pra usar o trait vc chama com o USE
//como se o php copiasse e colasse oq esta definido na trait apos ele ser chamado na class usando o USE

//se vc tem um determinado atributo que vai ser usando em varias classes, deve usar o TRAIT pra recopiar o codigo
class Usuario {
    use validacao, validacaoMelhor;

    public function valorc() {
        echo '<br>' . $this->c;
    }
}




$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo "$usuario->a <br> $usuario->b";

echo $usuario->valorc();