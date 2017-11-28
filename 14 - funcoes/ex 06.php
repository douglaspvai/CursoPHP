<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 18:28
 */

//PARAMETRO POR REFERENCIA

$a = 10;

// & - "E" COMERCIAL É PASSAGEM DE PARAMETRO POR REFERENCIA , O QUE ACONTECE NA FUNCAO ALTERA O ENDERECO DE MEMORIA E ONDE VARIAVEL RESIDE
function trocaValor(&$b){

    $b += 50;
    return $b;

}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
