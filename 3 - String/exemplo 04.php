<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 19/10/2017
 * Time: 18:29
 */

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, "mãe"); // / retorna a posicao da palavra mae

var_dump($q);

$texto = substr($frase, 0, $q); // retorna

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); //strlen conta a partir da palavra definida a te o final retorna o tamanho de uma string

var_dump($texto2);
