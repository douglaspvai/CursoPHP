<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 25/10/2017
 * Time: 17:36
 */

//$ts = strtotime("2001-09-11");
//$ts = strtotime("now");
$ts = strtotime("+1 day"); // essa funcao aceita expressoes

echo date("l, d/M/Y",$ts);