<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 17:13
 */

function __autoload($nomeClasse){

    require_once("$nomeClasse.php");

}


$carro = new DelRey();

$carro->acelerar(80);