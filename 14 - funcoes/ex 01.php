<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 17:52
 */

// UMA FUNÇÃO SEMPRE RETORNA UM VALOR. SE NAO RETORNAR UM VALOR É UMA SUB ROTINA E NAO UMA FUNÇÃO EM CONCEITO.


//SUB ROTINA
function ola(){

    echo "Ola Mundo <br>";

}

ola(); // chamando a função
ola(); // chamando a função

echo "<br>";
echo "<br>";



//FUNÇÃO - CODIGO ABSTRATO PODE - SE ENCAIXAR EM DIVERSOS LUGARES.
function bom(){

    return "BOM DIA MUNDO <br>";

} // essa função retorna uma string

echo bom(); // chamando a função


$frase = bom();

echo strlen($frase);