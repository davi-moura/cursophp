<div class="titulo">Desafio Switch</div>

<form method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-fah">Celsius > Faren</option>
        <option value="fah-cel">Faren > Celsius</option>
    </select>
    <button>Calcular</button>
</form>
<style>
    form > * {
        font-soze: 1.8rem;
    }
</style>
<?php
//usar switch
// echo $_POST['param'].'<br>';

// echo $_POST['conversao'];

$conversao = $_POST['conversao'];
$param = $_POST['param'];
const FATOR_MILHA = 0.62137;
const FATOR_KM = 1000;
const FATOR_FAH = 1.8;
const FATOR_FAH2 = 0.5;

var_dump($_POST);

switch($_POST['conversao']){
    case 'km-milha':
        $distancia = $param * FATOR_MILHA;
        $mensagem = 'Resultado da conversão: ' . $distancia . 'mi';
        break;  
    case "milha-km":
        $distancia = $param / FATOR_MILHA;
        $mensagem = 'Resultado da conversão: ' . $distancia . 'km';
        break;
    case "metro-km":
        $distancia = $param * FATOR_KM;
        $mensagem = 'Resultado da conversão:' . $distancia . 'km';
        break;
    case "km-metro":
        $distancia = $param / FATOR_KM;
        $mensagem = 'Resultado da conversão: ' . $distancia . 'm';
        break;
    case "cel-fah":
        $distancia =  ($param * FATOR_FAH) + 32;
        $mensagem = 'Resultado da conversão: ' . $distancia . 'F';
        break;
    case "fah-cel":
        $distancia =  ($param - 32) * FATOR_FAH2;
        $mensagem = 'Resultado da conversão: ' . $distancia . 'F';
        break;
    default:
        echo "insira um valor";
        break;

}
echo $mensagem;
