<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 23/10/2017
 * Time: 15:38
 */

// DO WHILE EXECULTA SEMPRE UMA VEZ MESMO A CONDIÇÃO SENDO FALSA, O WHILE SE EXECUTAR SITUAÇÕES COM NUMEROS, PRECISA COLOCAR UM CONTROLE POIS SE NÃO SENTRA NO LOOP INFINITO

$total = 100;
$desconto = 0.9;

do{

    $total *= $desconto;

}while($total>100);

echo $total;