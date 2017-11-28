<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 19/10/2017
 * Time: 18:27
 */

//                          FUNCAO DE SUBSTITUICAO
$empresa = "Hcode";

$empresa = str_replace("o","0", $empresa); //FUNCAO DE SUBSTITUICAO
$empresa = str_replace("e","3", $empresa);

echo $empresa;