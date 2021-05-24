<?php
    $database="localhost";
    $user="root";
    $pass="";
    $name="TendaForestal";
    $bbdd=mysqli_connect($database, $user, $pass, $name);
    if(!$bbdd){
        echo "Error conexió amb tenda ElTronc";
        print(mysqli_connect_error());
        exit();
    }
?>