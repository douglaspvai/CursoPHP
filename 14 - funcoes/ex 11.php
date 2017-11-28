<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 25/10/2017
 * Time: 17:04
 */

//FUNÇÃO ANONIMA

function test($callback){

    // Processo Lento

    $callback();

}

test(function(){

    echo "Terminou";

});