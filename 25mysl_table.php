<?php

    $servername="localhost";
    $username="root";
    $password="";

    //creat conection
    $conn = new mysqli($servername,$username,$password);

    //check cpnnection
    if ($conn->connect_error) {
        die("conection faild".$conn->connect_error);
    } 
    else 
    {
        echo "connect successfuly";
    }
    
    $sql = "CREATE DATABSE VK";
    mysqli_query($conn, $sql);


?>