<?php

$connect = mysqli_connect("localhost", "root", "", "persons_db");

if($connect){
    echo "connected!";
}else{
    echo "failed";
}


?>