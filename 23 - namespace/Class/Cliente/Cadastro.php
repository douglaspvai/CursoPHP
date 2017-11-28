<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 18:25
 */

namespace Cliente;

class Cadastro extends \Cadastro{

    public function  registrarVenda(){

        echo "Foi registrado uma venda para o cliente".$this->getNome();

    }

}