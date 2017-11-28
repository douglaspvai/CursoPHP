<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 16:57
 *
 *
 * POLIMORFISMO METODO COM MESMO NOME MAIS COM COMPORTAMENTO DIFERENTE
 *
 *
 */


abstract class Animal{
    public function  falar(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}


class Cachorro extends Animal{

    public function falar(){
        return "Late";
    }

}

class Gato extends Animal{
    public function falar()
    {
       return "Mia";
    }
}

class Passaro extends Animal{
    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e ". parent::mover(); //voa e pega o comportamento do metodo mover na classe Animal
    }
}

$pluto = new Cachorro();

echo $pluto->falar();
echo "<br>";
echo $pluto->mover();

echo "<br>----------------------------";
echo "<br>";

$tom = new Gato();
echo $tom->falar();
echo "<br>";
echo $tom->mover();

echo "<br>----------------------------";
echo "<br>";

$ave = new Passaro();
echo $ave->falar();
echo "<br>";
echo $ave->mover();