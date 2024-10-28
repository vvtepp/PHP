<?php

    //START SESSION
    session_start();

    if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin')
    {
        header("Location: index.php");
        exit();
    }

    //INCLUDE CONNECTION STRING
    include('db/connection.php');

    //CHECK IF CLIENT ID IS PROVIDED IN URL
    if(isset($_GET['ID']))
    {
        //GET THE VALUE
        $client_id = $_GET['ID'];
        
        //DELETE CLIENT FROM DB
        $delete_sql = "DELETE FROM users WHERE ID = '$client_id'";
        if($conn->query($delete_sql) === TRUE)
        {
            header("Location: admin_dashboard.php?deletesuccess");
        }
        else
        {
            echo "Error Deleting Client" .$conn->error;
        }
    }
    else
    {
        header("Location: admin_dashboard.php");
    }
?>