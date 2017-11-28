<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 25/10/2017
 * Time: 18:35
 */


//CRIANDO A PRIMEIRA CLASSE


class Pessoa {

    public $nome; // Atributo

    public function falar(){ //Metodo - FUNCAO DENTRO DA CLASSE

        return "O Meu nome é".$this->nome; // $this é a representacao da classe instanciada É REFERENCIA DENTRO DO METODO - INTERNA

    }

}

$douglas = new Pessoa(); // QUANDO NAO TEM METODO CONSTRUTOR O PARENTESE É OPCIONAL, CRIA UM METODO CONSTRUTOR VAZIO NESSE CASO

$douglas->nome = " Douglas Eufrauzino de Souza";

echo $douglas->falar();