<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 23/11/2017
 * Time: 15:31
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

/*O 25 - PDO CONSEGUE DETECTAR ONDE SÃO PARAMETROS - ELE MESMO COLOCA ASPAS SIMPLES SE FOR TEXTO E ETC.. PODE ENVIAR
QUALQUER COMANDO VIA STATEMENT QUERY  */

// NUNCA USE DELETE SEM WHERE.
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idUsuario = :ID");







$id = 1;

$stmt->bindParam("ID",$id);

$stmt->execute();

echo "DELETE OK!";