<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 30/10/2017
 * Time: 16:13
 */

//ENCAPSULAMENTO

class Pessoa{

    public $nome = " Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome . " <br>";
        echo $this->idade . " <br>";
        echo $this->senha . " <br>";

    }


}

//$objeto = new Pessoa();
$objeto = new Programador();

echo $objeto->nome . "<br>"; // Public nome acessa normalmente pois é publico .. mesmo acessando de fora
//echo $objeto->idade . "<br>"; // Protect so quem esta dentro da classe -  ou quem herda essa classe
//echo $objeto->senha . "<br>"; // Private esse esta um nivel acima de protect é o mais protegido . Nem mesmo os herdeiros conseguem acessar, somente quem esta dentro da classe

$objeto->verDados(); // como o metodo é publico - todos os dados aparecem .

//Quem pode ter acesso aos atributos e metodos?

//Atributos e metodos da mesma classe, das classes estendidas, e acessados pelo objeto. Quando é publico todo mundo ve,  protegido somente da mesma classe e classe estendida. Privado só na mesma classe