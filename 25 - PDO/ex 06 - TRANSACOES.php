<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 23/11/2017
 * Time: 15:51
 */

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");


/*COMMIT TODOS OS BANCOS USAM - DOIS INSERTS
PRECISAM ACONTECER JUNTOS.. EXECUTA OS DOIS OU CANCELA.. O COMMIT SO ACONTECE NO FINAL SE TUDO DER CERTO.
*/
$conn->beginTransaction(); //INICIANDO A TRANSACAO ANTES DO PREPARE

//------------------------------------------------------------------------------

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idUsuario = ?");

$id = 2;

//$stmt->bindParam("ID",$id);
$stmt->execute(array($id)); // OUTRA MANEIRA DE USAR O STMT NOTE QUE TEM O "?" ONDE DEVERIA SER ID

$conn->rollBack(); // CANCELOU O DELETE, USADO SE DER ERRADO.

echo "DELETE OK!";