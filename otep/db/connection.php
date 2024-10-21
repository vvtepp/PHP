<?php
    //ESTABLISH A CONNECTION TO THE DATABASE
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "jusip_db";

    //COMBINE ALL VARIABLES TO CONNECT THE DATABASE
    $conn = new mysqli($host, $user, $pass, $dbname);

    //CHECK IF CONNECTION IS FAILED
    if($conn->connect_error)
    {
        die("Connection Failed: ". $conn -> connect_error);
    }

?>