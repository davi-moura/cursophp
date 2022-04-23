<div class="titulo">Desafio Tabela 2</div>


<form action="#" method="post">
    <p>Insira a quantidade de linhas e colunas da tabela:</p>
    <input type="text" name="linha" placeholder="Linhas">
    <input type="text" name="coluna" placeholder="Colunas">
    <button type="submit">Gerar</button>
</form>


<table>
<?php

// $linha = $_POST['linha'];
// $coluna = $_POST['coluna'];




$linha = intval($_POST['linha']);
$coluna = intval($_POST['coluna']);

if(!$linha) $linha = 10;
if(!$coluna) $coluna = 10;

$num = 1;
for($i = 0; $i < $linha; $i++){
    echo "<tr>";
    for($j = 0; $j < $coluna; $j++){
        echo "<td>$num</td>";
        $num++;
    }
    echo "</tr>";
}


?>


</table>
<style>
    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>