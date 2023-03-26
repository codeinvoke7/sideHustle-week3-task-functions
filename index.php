<?php
require "database.php";


function multiply($num1, $num2, $num3 = 5){
    $reult = $num1 * $num2 * $num3;
    return $reult;
}

echo multiply(2,3);

?>