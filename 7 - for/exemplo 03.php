<?php
/**
 * Created by PhpStorm.
 * User: dougl
 * Date: 20/10/2017
 * Time: 17:18
 */

//selecionando datas

echo "<select>";

for($i = date("Y"); $i> date("Y") - 100; $i--){
    echo '<option value ="'.$i.'">'.$i.'</option>';
}

echo "</select>";
