<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 16:11
 */



/* A Interface é IMPORTANTISSIMO diz os metodos que tem que existir , o tipo de declaracao e parametros que deve receber. É a definição do que se deve existir na criação de determinada classe do sistema.
Implementar a interface  Na interface nao se diz o que faz. Apenas define os metodos, declaracao e os parametros . é uma forma de contrato , de obrigar o programador a implementar os metodos que a Interface
INTERFACE é obrigatório na integração de sistemas. São regras UMA equipe de programadores normalmente o programador Senior define as Interfaces, onde sao divididos por modulos.

Uma classe pode ser implementados varias Interfaces. O PHP SÓ PERMITE RODAR SE FOR IMPLEMENTADO AS INTERFACES OBRIGATORIAS

INTERFACE É UM CONTRATO A DIFERENCA DA CLASSE ABSTRATA é que Uma classe pode implementar varias interfaces . UMA CLASSE SÓ HERDA DE UMA CLASSE ABSTRATA

*/



interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo{ //obriga a seguir exatamente as definicoes da interface

    public function acelerar($velocidade)
    {
        // TODO: Implement acelerar() method.

        echo " O veiculo acelerou até ". $velocidade. "km/h";
    }

    public function frenar($velocidade)
    {
        // TODO: Implement freiar() method.

        echo " O veiculo frenou até ". $velocidade. "km/h";
    }

    public function trocarMarcha($marcha)
    {
        // TODO: Implement trocarMarcha() method.

        echo " O veiculo engatou a marcha ". $marcha;
    }

}

$carro = new Civic();

$carro->trocarMarcha(5);