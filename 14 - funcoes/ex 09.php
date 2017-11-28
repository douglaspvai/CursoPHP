<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 25/10/2017
 * Time: 15:16
 */

// FUNCOES DO PHP 7

function soma(int ...$valores) : string{ //convertendo o tipo para string pode-se converter para qualquer tipo como o float

    return array_sum($valores); // funcao para somar

}

echo soma();


echo "<br>";
var_dump(soma(2,2));
echo "<br>";
echo soma(35,15,10);
echo "<br>";