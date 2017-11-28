<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 23/10/2017
 * Time: 15:30
 */

$condicao = true;
$tentativas = 1;

$organiza = array();

while ($condicao) {

    $numero = rand(1, 20); // funcao de numeros randomicos

    array_push($organiza, $numero);


    if ($numero === 21) {



        $condicao = false;

        sort($organiza);
        foreach ($organiza as $key => $val) {
            echo "<br/>" . " POSICAO [" . $key . "] = " . $val . "\n";
        } // ORDENANDO O ARRAY

        echo "$numero <br/></br><br> <h3> - O  TOTAL DE TENTATIVAS : $tentativas </h3>";

        break;

    }

    echo '<b><p style="color:red">' . $tentativas . ' : </p></b>' . $numero . " <br/>";

    $tentativas++;
}