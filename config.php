<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_decor";
    
    $conn = mysqli_connect($host,$user,$pass,$db);
    $sql = mysqli_select_db($conn,$db);
    
    if($sql){
        echo "success";
    } else {
        echo "error";
    }