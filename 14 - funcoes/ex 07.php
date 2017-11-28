<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 18:32
 */


//PARAMETRO POR REFERENCIA - ACESSANDO O ENDEREÇO DE MEMORIA DA VARIAVEL - PONTEIRO

$pessoa = array(
    'nome' => 'Joao',
    'idade' => 20
);

foreach ($pessoa as &$value) { // "&" o valor de dentro do array esta passando por referencia , pode modificar a variavel, no caso o ARRAY.

    if(gettype($value) === 'integer') $value += 10;
    echo $value . '<br>';

}

print_r($pessoa);