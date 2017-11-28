<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 17:26
 */

// ID DE SESSÃO SE CRIA UM ID PARA CADA USUARIO QUE ENTRA . É POSSIVEL RECUPERAR INFORMAÇÕES MESMO SEM ESTIVER LOGADO.

require_once("config.php");

echo session_id(); // MOSTRA O ID DA SESSÃO