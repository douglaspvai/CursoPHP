<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 20/10/2017
 * Time: 17:30
 */

require "formulario.html";



if(isset($_GET)){
    foreach($_GET as $key => $value){
            echo "Nome do campo: ". $key . "<br/>";
            echo "Valor do campo: ". $value;
            echo "<hr>";
    }
}