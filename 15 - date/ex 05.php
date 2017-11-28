<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 25/10/2017
 * Time: 17:47
 */

//CLASSE DATETIME NATIVA

$dt = new DateTime("04-09-2017"); // definindo a data , se ficar em branco pega a atual

$periodo = new DateInterval("P60D"); // perio do internvalo

echo $dt->format("d/m/Y H:i:s"); //variavel agora e um objeto

echo "<br>";

$dt->add($periodo); // adicionando o periodo definido no caso 15 dias

echo "<br>";

echo $dt->format("d/m/Y H:i:s"); //variavel agora e um objeto



