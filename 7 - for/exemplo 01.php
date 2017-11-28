<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 20/10/2017
 * Time: 17:05
 */

for($i = 0; $i < 1000; $i += 5){

    if($i > 200 && $i < 800) continue; //pula do 200 ao 800

    if($i === 900) break; // quando chega no 900 ele sai do for

    echo "$i <br/>";
}