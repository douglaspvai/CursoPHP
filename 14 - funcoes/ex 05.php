<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 18:22
 */

//PARAMETRO POR VALORES

$a = 10;

// O QUE ACONTECE DENTRO DA FUNÇÃO FICA NA FUNÇÃO
// VARIAVEL É UMA COISA, PARAMETRO DE FUNÇÃO OUTRA
function trocaValor($b){

    $b += 50;
    return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;