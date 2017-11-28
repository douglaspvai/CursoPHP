<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 17:29
 */

// FORÇAR A CRIAR UMA NOVA SESSÃO
// ID DE SESSÃO NÃO DEVE SER MOSTRADO NA PAGINA, NUNCA - POIS OUTROS USUARIOS PODEM ROUBAR OS VALORES QUE ESTAO ARMAZENADOS EM DETERMINADA SESSAO-
// HTTPS - UMA DAS FUNCIONALIDADES É CRIPTOGRAFIA DE SESSAÕ

session_id('4008i9nul0rvghgddk0ufe9igb'); // recupera o id de sessão com isso é possivel acessar em dois lugares diferentes ao mesmo tempo . O parametro é o id da sessão

require_once("config.php");

session_regenerate_id(); // gera id diferente -  USA-SE NORMALMENTE NA PAGINA INDEX - PARA GERAR UM NOVO PARA PROTEGER O USUARIO

echo session_id();

//var_dump($_SESSION);