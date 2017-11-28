<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 23/10/2017
 * Time: 15:30
 */

$condicao = true;
$tentativas = 1;
while ($condicao) {

    $numero = rand(27, 100); // funcao de numeros randomicos


    if ($numero === 10) {

        echo "$numero <br/></br><br> <h3> - O  TOTAL DE TENTATIVAS : $tentativas </h3>";

        $condicao = false;

        break;

    }

    echo '<b><p style="color:red">' . $tentativas . ' : </p></b>' . $numero . " <br/>";

    $tentativas++;
}