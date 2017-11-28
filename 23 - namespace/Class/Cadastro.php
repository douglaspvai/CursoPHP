<?php

/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 18:03
 */
class Cadastro
{

    private $nome;
    private $email;
    private $senha;

    public function getNome():string
    {

        return $this->nome;

    }

    public function getEmail():string
    {

        return $this->email;

    }

    public function getSenha():string
    {

        return $this->senha;

    }

    public function setNome($nome){

        $this->nome = $nome;

    }

    public function setEmail($email){

        $this->email = $email;

    }

    public function setSenha($senha){

        $this->senha = $senha;

    }

    public function __toString()
    {
        // TODO: Implement __toString() method.

        return json_encode(array(
            "nome"=>$this->getNome(),
            "email"=>$this->getEmail(),
            "senha"=>$this->getSenha()
        ));
    }


}