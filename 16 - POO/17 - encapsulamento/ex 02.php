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

class Programador extends Pessoa{ // classe estendida de tudo que for da classe pessoa, menos os metodos e atributos privados

    public  function verDados(){

        echo get_class($this) . "<br>"; // serve para ver que classe que foi feito a estancia do objeto

        echo $this->nome . " <br>"; // PUBLICO
        echo $this->idade . " <br>"; // PROTEGIDO HERDA
        // echo $this->senha . " <br>"; //SENHA NAO TEM ACESSO POIS E PRIVADO

    }

}


$objeto = new Programador();

$objeto->verDados(); // como o metodo é publico - todos os dados aparecem .

//Quem pode ter acesso aos atributos e metodos?

//Atributos e metodos da mesma classe, das classes estendidas, e acessados pelo objeto. Quando é publico todo mundo ve,  protegido somente da mesma classe e classe estendida. Privado só na mesma classe