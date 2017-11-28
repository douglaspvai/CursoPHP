<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 23/10/2017
 * Time: 16:35
 */

$condicao = true;
$tentativas = 1;

$numErrado = array();

while ($condicao) {

    if (in_array($numero = rand(0, 10), $numErrado) == false) {// compara array numeroErrado com o numero atribuido se for diferente continua .. se na funcao rand() tiver algum numero do array, tenta de novo

        array_push($numErrado, $numero); //acrescenta numeros no array


        /*   $numErrado = array_fill(0,$tentativas,$numero);*/


        if ($numero === 11) {

            echo "$numero <br/></br><br> <h3> - O  TOTAL DE TENTATIVAS : $tentativas </h3>";

            print_r($numErrado);

            $condicao = false;

            break;

        }

//        echo '<b><p style="color:red">' . $tentativas . ' : </p></b>' . $numero . " <br/>";

        echo $numero . " <br/><br/>";


        $tentativas++;

        if($tentativas>count($numErrado)){

            $condicao = false;

            echo "<H1> Numero maximo permitido </H1>";

        }


    }






}
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

sort($numErrado);
foreach ($numErrado as $key => $val) {
    echo "<br/>" . " POSICAO [" . $key . "] = " . $val . "\n";
} // ORDENANDO O ARRAY