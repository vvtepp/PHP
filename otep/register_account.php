<?php
//CALL CONNECTION STRING
include('db/connection.php');

if(isset($_POST['register']))
{
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $role = "client";
   
   //SANITIZE USERNAME , ELIMINATE SQL INJECTION
   $username = $conn->real_escape_string($_POST['username']);
   $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

   //Check if the username already exists
   $check_sql = "SELECT username FROM users WHERE username='$username'";
    //Execute Sql Command
    $result = $conn->query($check_sql);
    
    if($result->num_rows > 0)
    {
        header("Location: register.php?message=Username is already taken!");
    }
    else
    {
        $addusersql = "INSERT INTO users (`ID`, `firstname`, `lastname`, `username`, `password`, `role`)
        VALUES (null, '$firstname', '$lastname', '$username', '$password', '$role')";

            if($conn->query($addusersql) === TRUE) {
                header("Location: index.php?message_success=Registration successful!");
            } else {
                echo "Error: " . $addusersql . "<br>" . $conn->error;
            }
      
        exit();
    }
}
?>