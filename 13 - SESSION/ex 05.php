<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 24/10/2017
 * Time: 17:41
 */

require_once('config.php');

echo session_save_path(); // onde salva a sessão

echo "<br/>";

var_dump(session_status());

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "as sessões estiverem desabilitadas.";
        break;
    case PHP_SESSION_NONE:
        echo "as sessões estiverem habilitadas, mas nenhuma existir.";
        break;
    case PHP_SESSION_ACTIVE:
        echo "as sessões estiverem habilitadas, e uma existir";
}