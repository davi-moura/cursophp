<div class="titulo">Tipo Booleano</div>

<?php
// VERDADEIRO OU FALSO, seus valores literais

echo true;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');

echo '<br>' . is_bool(false); // detectar se uma parada é booleana: is_bool
echo '<br>' . is_bool('true');

//regras de conversões de outros tipos para booleano

echo '<p>Regras: </p>';
echo '<br>' .  var_dump((bool) 0); //apenas 0 vai ser falso, dos inteiros
echo '<br>' .  var_dump((bool) 20);
echo '<br>' .  var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.000000000001);
echo '<br>' . var_dump((bool) ""); // false 0 ou vazio
echo '<br>' . var_dump((bool) "0"); // false
echo '<br>' . var_dump((bool) " "); // todo resto de sttring na conversão é true
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");

echo '<br>' . var_dump(!!"false");