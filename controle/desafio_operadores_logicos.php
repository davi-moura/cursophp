<div class="titulo">Atv Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta!
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa mais saudável!
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<?php

// echo $_POST['t1'];
// echo $_POST['t2'];

// if(isset($_POST['t1']) && isset($_POST['t2'])){
//     $t1 = $_POST['t1'] == 1;
//     $t2 = $_POST['t2'] == 1;
//     $t3 = $t1 && $t2 ;
//     if($t1 && $t2){
//         echo "compra a tv de 50' e sorvete";
//     }else if($t1 != $t2){
//         echo "comprar tv de 32' e sorteve";
//     }else if($t3 != 1){
//         echo "Ficar em casa mais saudavel";
//     }
// }

if(isset($_POST['t1'])){
    if(isset($_POST['t1']) && isset($_POST['t2'])) {
        $t1 = $_POST['t1'] === '1';
        $t2 = !!$_POST['t2'];
        $tv = '';
        $sorvete = false;
    
        if($t1 && $t2) {
            $tv = '50"';
        } elseif($t1 xor $t2) {
            $tv = '32"';
        }
    
        if($t1 or $t2) {
            $sorvete = true;
        }
    
        if($tv) {
        $resultado = "Vamos comprar uma TV de $tv";
        } else {
            $resultado = "Sem TV dessa vez :(";
        }
    
        $saudavel = !$sorvete;
    
        if($saudavel) {
            $resultado .= '<br>Estamos mais saudáveis!';
        } else {
            $resultado .= '<br>Sorvete liberado \o/';
        }
    
        echo "<p>$resultado</p>";
    }
}


?>