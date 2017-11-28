<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 18/10/2017
 * Time: 20:27
 */
$nome = "Douglas";
$anoNascimento = 1990; //boa pratica de Nomeclatura da variavel , variavel nao se pode usar simbolos, numeros no começo, nem nomes pre-definidos como $this. Importante tomar cuidado com o nome das variaveis.

echo"<br/>"; //pular a linha
echo $anoNascimento;
echo"<br/>";





$concatenar = $nome ." ". $anoNascimento; // criando uma variavel com a concatenação de nome e ano

echo $concatenar;

unset($anoNascimento); // limpar a variavel definida



if(isset($anoNascimento)){ //verifica se a variavel foi definida
    echo $anoNascimento;
}