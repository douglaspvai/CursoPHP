<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 23/11/2017
 * Time: 16:25
 */

//PARTE - 1 CRIANDO A CLASSE DO BANCO DE DADOS APRIMORANDO O PDO ESSA CLASSE CONVERSA COM O BANCO

class Sql extends PDO
{

    private $conn;

    public function __construct() //ASSIM QUE CONSTRUIR O OBJETO, FAZER UMA INSTANCIA JA CHAMA ESSE METODO PARA CONECTAR NO BD
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    }

    private function setParams($statement, $parameters = array())
    {

        foreach ($parameters as $key => $value) {

            $this->setParam($statement,$key, $value); //faz dentro do fereach para ficar dinamico.

        }
    }

    private function setParam($statement, $key, $value)
    {

        $statement->bindParam($key, $value);

    }

    public function query($rawQuery, $params = array())
    {

        $stmt = $this->conn->prepare($rawQuery); // acesso prepare da classe PDO .. COMO Sql é uma classe extendida do PDO TEM ESSE ACESSO

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array()) :array
    {

        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}