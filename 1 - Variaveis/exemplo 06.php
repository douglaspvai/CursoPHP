<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 18/10/2017
 * Time: 22:00
 */

////////////////////////********** ESCOPO DE VARIAVEL   ***********/////////////////

$nome = "Douglas";

/*function teste(){ // a variavel nao existe nesse escopo, se alguem chamar a casa esta com a porta e janela fechada precisa abrir, o $_GET NAO PRECISA USAR GLOBAL, FUNCIONA DE QUALQUER GEITO, o barulho é muito alto.
    echo $nome;
}
*/

function teste(){ // a variavel foi definida com global, precisa ser colocada em cada função que for usar.
    global $nome;
    echo $nome;
}

function teste2(){
    $nome = "Joao"; // criando a variavel com o mesmo nome.
    echo $nome. "agora o teste 2";
}

teste();
teste2();