<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 22/11/2017
 * Time: 12:25
 */


//RECURSO DO PHP 7 - MSQLI


$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){

    echo "Error : " . $conn->connect_error;
    exit;

}
//METODO PREPARE SERVE PARA PREPARAR O COMANDO A EXECULTAR NO BD - USA-SE AS INTERROGACOES
$stmt = $conn->prepare("INSERT INTO tb_usuarios (desLogin, desSenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass); //TYPE NO CASO "S" DE STRING

$login = "user";
$pass = "123456";

$stmt->execute(); //METODO EXECUTE

$login ="root";
$pass ="&%¨$(#";

$stmt->execute();

