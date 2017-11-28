<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 23/11/2017
 * Time: 16:50
 */

spl_autoload_register(function ($class_name){

    $filename = "class".DIRECTORY_SEPARATOR.$class_name.".php";
    if(file_exists($filename)){

        require_once($filename);
    }

});