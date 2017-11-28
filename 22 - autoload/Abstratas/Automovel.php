<?php


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

}