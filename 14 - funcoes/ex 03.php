<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 18:05
 */

//PARAMETRO DE FUNÇÕES - INFORMAÇÕES QUE UMA FUNÇÃO PRECISA EXECUTAR.

function ola($periodo, $texto = "Mundo"){ //definindo valores padroes, obrigatorios eles sempre devem estar na esquerda na ordem de chamada na criacao do parametro da funcao. As que vem com valor padrao a direita

    return "Ola $texto! $periodo! <br>";

}

echo ola("Ola","Mundo");
echo ola("");
echo ola("Douglas","Boa noite");
echo ola("Lorenzo");