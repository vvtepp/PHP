<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "vey_mw";

//Create connection
$conn = new mysqli($host, $username, $password, $dbname);

//Check connection
if ($conn->connect_error)
{
    die("Connection Failed: ".$conn->connect_error);
}


?>