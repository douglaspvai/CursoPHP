<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 18:16
 */

function ola(){

    $argumentos = func_get_args(); //RETORNA O ARRAY com todos os argumentos que foram passados dentro do parametro da funcao sem precisar de parametros
    return $argumentos;
}

var_dump(ola("Bom dia", 10));

