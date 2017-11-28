<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 20/10/2017
 * Time: 16:38
 */

//include "exemplo 01.php"; // Incluindo o Arquivo onde esta a funcao , funciona mesmo se o arquivo nao estiver funcionando corretamente e não existir. E também é padrao do PHP.ini ... O include é otimo para programar sistemas em grande escala com colaboradores.
require "exemplo 01.php"; // O require ele obriga que o arquivo exista e que esteja funcionando corretamente
require_once "exemplo 01.php"; // Tras o arquivo apenas uma vez.
$resultado = somar(10,20);

echo $resultado;