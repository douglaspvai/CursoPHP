<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 17:11
 */

//AS VARIAVEIS DE SESSÃO SÃO SUPER GLOBAIS PODEM SER ENXERGADAS EM TODO O CODIGO ENQUANTO O USUARIO ESTA ONLINE, QUANDO O USUARIO ACESSA A INTERNET UMA SESSÃO
// É CRIADA ENTRE O USUARIO E O SERVIDOR - QUANDO ACESSAMOS EM UM SITE CRIA-SE UM ARQUIVO DE TEXTO TEMPORARIO NO PC DO USUARIO E OUTRO NO SERVIDOR E AMARRAM AS DUAS. NORMALMENTE É 20MIN . ALGUNS SITES SÃO MENORES COMO O DE BANCO. ESSAS VARIAVEIS DE SESSÃO SÃO TOTALMENTE PROGRAMAVEIS

session_start(); // TODA A PAGINA QUE FOR USAR A SESSÃO TEM QUE TER ESSA FUNÇÃO session_start, porém pode mudar no SERVIDOR

// NO ARQUIVO PHP.ini parametro session auto start. la pode definir a sessão que irão iniciar automaticamente, porém por via de regra costuma-se iniciar em toda a pagina que for usar . Normamente no arquivo de configuração poderia criar o session_start


$_SESSION["nome"] = "Hcode";