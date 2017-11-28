<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 17:56
 */

//DIRECTORY_SEPARATOR DEFINE QUAL A SEPARACAO DE ACORDO COM O SISTEMA OPERACIONAL

spl_autoload_register(function($nameClass){
    $dirClass = "Class";
    $filename= $dirClass. DIRECTORY_SEPARATOR .$nameClass . ".php";

    if(file_exists($filename)){

        require_once($filename);
    }
});