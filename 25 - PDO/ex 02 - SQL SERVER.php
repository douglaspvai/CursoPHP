<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 22/11/2017
 * Time: 15:06
 */

// 25 - PDO É O PADRAO USADO PARA TRATAR SQL A PARTIR DO PHP 5

/*25 - PDO PERMITE TRABALHAR COM TRANSAÇÕES OU PERMITE OU CANCELA*/

//EXEMPLO DE CONSULTA SIMPLES

$conn = new PDO("sqlsrv:Database=dbphp7;server=\SQLEXPRESS;ConnectionPooling=0", "DESKTOP-C02DUVV\Douglas", "220606");


//stmt significa statement
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY desLogin");

$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); // já fatia todas as linhas , sem precisar usar o WHILE igual o MYSQLI


foreach ($resultado as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
    }

    echo "=====================================================<br>";

}

var_dump($resultado);




