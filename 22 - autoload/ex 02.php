<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 17:20
 */


function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse.".php") === true){

        require_once($nomeClasse.".php");

    }

}

spl_autoload_register("incluirClasses");

// CARREGANDO CLASSES DE OUTRA PASTA
spl_autoload_register(function($nomeClasse){
    if(file_exists("Abstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php") === true){

        require_once("Abstratas". DIRECTORY_SEPARATOR .$nomeClasse.".php");

    }

});


$carro = new DelRey();

$carro->acelerar(80);