<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 16:46

 A classe abstrata é semelhante a interface, a diferenca da classe abstrata nao só define o que os metodos vao ter como tambpenm o que eles fazem
 O objeto nunca instancia a classe abstrata para usar (instanciar) deve-se criar uma segunda classe que estende da classe abstrata
 *
 * MA CLASSE SÓ HERDA DE UMA CLASSE ABSTRATA MAS PODE IMPLEMENTAR VARIAS INTERFACES


 */


interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

Abstract class Automovel implements Veiculo{

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

} //NINGUEM CONSEGUE INSTANCIAR DIRETAMENTE A CLASSE ABSTRATA , PRECISA CRIAR OUTRA CLASSE PARA IMPLEMENTAR







class DelRey extends Automovel{

    public function empurrar(){

    }

}

$carro = new DelRey();
$carro->acelerar(200);