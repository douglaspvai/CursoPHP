<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 23/10/2017
 * Time: 16:29
 */

$pessoas = array(



);

array_push($pessoas, array(

    'nome' => 'Jao',
    'idade' => 23

));

array_push($pessoas, array(

    'nome' => 'Camila',
    'idade' => 26

));


echo json_encode($pessoas); // transcrevendo o array em json, gerando.
