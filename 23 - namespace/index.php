<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 09/11/2017
 * Time: 18:14
 */

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome(" Douglas ");
$cad->setEmail("douglas_e@outlook.com.br");
$cad->setSenha("123123123");

$cad->registrarVenda();

