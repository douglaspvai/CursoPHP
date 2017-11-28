<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 20/10/2017
 * Time: 16:57
 */

$diaDaSemana = date("w");

switch($diaDaSemana){
    case 0 :
        echo "Domingo";
        break;
    case 1 :
        echo "Sedunga";
        break;
    case 2 :
        echo "terca";
        break;
    case 3 :
        echo "quarta";
        break;
    case 4 :
        echo "qui";
        break;
    case 5 :
        echo "sex";
        break;
    case 6 :
        echo "sab";
        break;
    default:
        echo" Data invalida";
}