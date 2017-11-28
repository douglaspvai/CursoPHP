<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 30/10/2017
 * Time: 15:56
 */

//Metodo construtor é execultada automaticamente quando a classe é criada. Esse metodo tem que ter exatamente o nome da classe ou usar o metodo "__construct"
//No PHP 7 não se usa o mesmo nome da classe

// Metodo Magico

class Endereco
{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c)
    {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct() // usado para remover da memoria a classe ou o objeto. Pode acontecer quando a pagina sair da execucao ou definir manualmente.. Usado para desconectar do banco de dados, matar uma variavel e registro de log
    {
        // TODO: Implement __destruct() method.

        var_dump("DESTRUIR");
    }

    public function __toString() // transformando o objeto em string caso use o "echo"
    {
        // TODO: Implement __toString() method.

        return $this->logradouro . " , " . $this->numero . " " . $this . " " . $this->cidade;

    }

}

$meuEndereco = new Endereco("Rua kakaka", "155", "´Paranavai"); //objeto meu endereco com os atributos .. usando o "new" ele chama do metodo magico "__construct

//var_dump($meuEndereco);
//
//unset($meuEndereco); // chamando o metodo destruir.

echo $meuEndereco;
