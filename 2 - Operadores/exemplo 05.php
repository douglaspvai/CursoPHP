<?php

// OPERADORES NOVOS DO PHP 7

// SPACE CHIP

$a = 50;

$b = 35;


var_dump($a <=> $b); //se for maior sera (1) se igual (0) se menor (-1).

// OPERADOR PARA COMPARAR SE O VALOR É NULO.

$c = NULL;

$d = NULL;

$f = 10;

echo $c ?? $d ?? $f; // ELE IGNORA OS NULOS ATÉ CHEGAR NO QUE ESTA ATRIBUIDO.