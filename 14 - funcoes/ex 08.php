<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 25/10/2017
 * Time: 15:16
 */

// FUNCOES DO PHP 7

function soma(int ...$valores){ //declaracao de tipos escalares define qual o tipo e a variavel array.

    return array_sum($valores); // funcao para somar

}

echo soma();


echo "<br>";
echo soma(2,2);
echo "<br>";
echo soma(35,15,10);
echo "<br>";