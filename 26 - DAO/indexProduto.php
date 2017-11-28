<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 28/11/2017
 * Time: 16:31
 */

require_once ("config.php");


/* PRODUTO POR ID

 $produto = new Produto();
 $produto->loadById(2);
 echo $produto;*/

/* TODOS OS PRODUTOS
 * $lista = Produto::getList();
echo json_encode($lista);*/


/*
 * CARREGA UMA LISTA DE PRODUTOS BUSCANDO PELA DESCRICAO
$busca = Produto::search("xb");
echo json_encode($busca);*/


//INSERE NOVO PRODUTO
/*$produto = new Produto("Controle XBOX Original","120");
$produto->insert();
echo $produto;*/

//ALTERA NO BANCO DE DADOS
/*$produto = new Produto();
$produto->loadById(5);
$produto->update("Controle Original de Playstation 4", "200");
echo $produto;*/

//DELETE
$produto = new Produto();
$produto->loadById(1);
$produto->delete();