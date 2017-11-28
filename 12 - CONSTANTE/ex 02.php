<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 23/10/2017
 * Time: 18:51
 */

//RECURSO PHP 7 CONSTANTE EM ARRAY

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'senha123',
    'test'
]); // nao pode usar espaco no nome da constante caso queira que o nome seja case sensitive é so passar mais um parametro o true

print_r(BANCO_DE_DADOS);