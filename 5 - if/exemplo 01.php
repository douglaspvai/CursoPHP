<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 19/10/2017
 * Time: 18:41
 */

$qualAsuaIdade = 18;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualAsuaIdade<$idadeCrianca){

    echo "Criança";

} else if($qualAsuaIdade < $idadeMaior){

    echo "Adolescente";

}else if($qualAsuaIdade < $idadeMelhor){

    echo "Adulto";
}

else{

    echo"Idoso";
}

echo "<br/>";

echo ($qualAsuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade"; // Operador Ternario ..