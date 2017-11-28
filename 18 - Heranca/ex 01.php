<?php

/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 15:53
 */
//A HERANÇA É O MEIO DE ABSTRAIR MELHOR O SISTEMA COM CLASSES GENERICAS. EX: Classe helicopter herda da Classe TransporteAereos que herda da classe Transporte.
class Documento
{

    private $numero;

    public function getNumero()
    {

        return $this->numero;

    }

    public function setNumero($valor)
    {

        return $this->numero = $valor;

    }


}

class CPF extends Documento
{//sempre a classe filho que acessa o pai.

    public function validar():bool
    {

        $numeroCPF = $this->getNumero();
        //validacao do CPF
        return true;

    }

}


$doc = new CPF();

$doc->setNumero("12234444-55");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();



