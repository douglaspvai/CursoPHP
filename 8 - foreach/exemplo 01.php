<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 20/10/2017
 * Time: 17:26
 */

$meses = array(

    "Jan", "Fev", "Mar",
    "abr", "mai","jun",
    "jul"

);

foreach($meses as $index => $mes){ // para cada item encontrado

    echo "Indice :". $index. "<br/>";
    echo "O mes é :". $mes. "<br/>";

}