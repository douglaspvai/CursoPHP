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
// NUNCA USE UPDATE SEM WHERE.
$stmt = $conn->prepare("UPDATE tb_usuarios SET desLogin = :LOGIN, desSenha =  :PASSWORD WHERE idUsuario = :ID");








$login = "AUGUSTO";
$password = "PINt((";
$id = 2;

$stmt->bindParam(":LOGIN", $login); // bindParam para cada parametro
$stmt->bindParam(":PASSWORD", $password); // bindParam para cada parametro
$stmt->bindParam("ID",$id);

$stmt->execute();

echo "ATUALIZADO OK!";