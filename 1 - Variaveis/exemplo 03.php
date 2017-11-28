<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 18/10/2017
 * Time: 20:54
 */
/////////////////////////////////////***********  TIPOS DE VARIAVEIS *********/////////////

///////////////////////////////// BASICAS
$nome = "Jaqueline";
$site = 'www.google.com.br'; // texto tem aspas, duplas ou simples.

$ano = 1990;
$salario = 5500.97;
$bloqueavel = false;

//////////////////////////// COMPOSTO

$frutas = array("abacaxi","laranja","manga",10); //variavel array tipo composto

echo $frutas[2];
echo"<br/>";
echo"<br/>";


$nascimento = new DateTime(); // sempre que usar o new esta utilizando Orientacao a Objeto classe nativa do PHP DATAS.

var_dump($nascimento);

echo"<br/>";

//////////////////////////// ESPECIAIS

$arquivo = fopen("exemplo 03.php","r");

var_dump($arquivo);

echo"<br/>";

$nulo = NULL;//ausencia de valor, vazio foi iniciado na memoria.
$vazio = "";
?>