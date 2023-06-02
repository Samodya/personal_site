<?php
    $head_hostname = "localhost";
    $head_user = "root";//change
    $head_password = "";//change
    $head_database = "personal";//change

    $con=mysqli_connect($head_hostname,$head_user,$head_password,$head_database);
    if(!$con){
        die("Connection Failed: ". mysqli_connect_error());
    }
?>