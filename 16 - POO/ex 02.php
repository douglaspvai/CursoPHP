<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 25/10/2017
 * Time: 18:47
 */
// ATRIBUTOS E METODOS - USA-SE O GET E SET POR PADRAO DE REGRA
class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){ //Metodo padrao para pegar valor

        return $this->modelo;

    }

    public function setModelo($valor){ // Metodo para mudar o valor

        $this ->modelo = $valor;

    }

    public function getMotor(){
        return $this->motor;
    }

    public function setMotor($valor){

        $this->motor = $valor;

    }

    public function getAno(){

        return $this->ano;

    }

    public function setAno($valor){
        $this->ano = $valor;
    }

    public function exibir(){
        return array(
            "modelo" =>$this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );

    }

}

$prisma = new Carro();

$prisma->setMotor("1.4"); //definindo (setando) o motor
$prisma->setModelo("Sedan"); // modelo
$prisma->setAno("2008"); //ano

echo $prisma->getModelo(); //retornando o valor definido

echo "<br>";

print_r($prisma->exibir()); //exibindo o array do metodo exibir

echo "<br>";

var_dump($prisma->exibir()); //exibindo o array do metodo exibir






