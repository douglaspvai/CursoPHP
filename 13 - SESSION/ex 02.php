<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 17:13
 */

require_once("config.php");

session_unset($_SESSION['nome']); // apaga a sessão nome, limpa somente essa variavel, se colocar sem nenhuma variavel apaga todas as variaveis de sessão


echo $_SESSION['nome'];

session_destroy(); // limpa a variavel e remove o usuario.

