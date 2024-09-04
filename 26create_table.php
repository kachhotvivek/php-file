<?php

    $servesrname="localhost";
    $username="root";
    $password="";
    $database="contacts";

    //create a connection
    $conn= mysqli_connect($servesrname,$username,$password,$database);

    // check connection
    if(!$conn)
    {
        die("sorry we faild to connect". mysqli_connect_error());
    }
    else
    {
        echo "connection was successful<br>";
    }

    // sql query to be executed
    $sql = "INSERT INTO `mbd` (`name`, `email`, `contact`) VALUES ('ritik','ritik@gamil.com','9987654321')";

    $result= mysqli_query($conn, $sql);
    if($result)
    {
        echo "the record has been insert successfully";
    }
    else
    {
        echo "the record was not inserted".mysqli_error($conn);
    }
    

?>