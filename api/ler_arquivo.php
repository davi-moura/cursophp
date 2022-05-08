<div class="titulo">Ler Arquivo</div>

<?php
//ler por byte
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10);
fclose($arquivo);

echo '<hr>';
//ler o arquivo contando os bytes e lendo com o numeros de bytes
$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho, '<br>';
echo fread($arquivo, $tamanho);
fclose($arquivo);

echo '<hr>';
//lendo arquivo apenas linha por linha
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
var_dump(fgets($arquivo));
echo '<br>';
fclose($arquivo);

echo '<hr>';
//percorrendo todas as linhas de um arquivo sem saber as linhas
$arquivo = fopen('teste.txt', 'r');
//EOF: end of file.
//"enquanto ele n chegar no final do arquivo...."
while(!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
fclose($arquivo);

echo '<hr>';
//está lendo caractere por caractere, FGETC, pega cada um dos caractere
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo);
}
echo '<br>';
fclose($arquivo);

echo '<hr>';
//abrindo o arquivo: ler e alterar, mas o ideal é separar as coisas
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo), '<br>';
echo fgets($arquivo), '<br>';
fwrite($arquivo, "\nAdicionado durante a leitura");
fclose($arquivo);

echo "Fim!";