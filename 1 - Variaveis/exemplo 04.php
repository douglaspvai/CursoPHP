<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 18/10/2017
 * Time: 21:34
 */

/////////////////////*******  VARIAVEIS PRE DEFINIDAS   ********/////////////////////////////

$nome = (int)$_GET["a"]; //TODAS AS VARIAVEIS ATRAVES DA URL GET OU POST. TODA INFORMACAO QUE VIR DO GET OU POST É STRING PARA MUDAR PRECISA CONVERTER DESSA FORMA.

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;
