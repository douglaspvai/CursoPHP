<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 23/10/2017
 * Time: 18:42
 */

$json = '[{"nome":"Jao","idade":23},{"nome":"Camila","idade":26}]';

$data = json_decode($json, true); // tem o json formatado e volta em array.

var_dump($data);