<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 22/11/2017
 * Time: 12:25
 */

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){

    echo "Error : " . $conn->connect_error;
    exit;

}

$resultado = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//MYSQL TEM UM CURSOR QUE VERIFICA LINHA POR LINHA , ENQUANTO OLHAR PARA O BANCO E TIVER RESULTADO TRAS PARA VARIAVEL ROW
while($row = $resultado->fetch_array(MYSQLI_ASSOC)){

    array_push($data, $row);

}

echo json_encode($data);

?>


