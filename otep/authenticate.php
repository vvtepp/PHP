<?php
    //include database connnection file
    include('db/connection.php');
    //Start a session variable to manage user data
    session_start();

    if(isset($_POST['login']))
    {
        //Sanitize the username to prevent SQL injection
        $username = $conn->real_escape_string($_POST['username']);
        //Get password from the form (note: not yet encrypted here)
        $password = $_POST['password'];

        //SQL query to select user data 
        //from database based on the username
        $sql_username = "SELECT * FROM users WHERE username='$username'";
        //Execute query
        $result = $conn->query($sql_username);
        //Check if the query returned any results
        if($result->num_rows > 0)
        {
            //Fetch the associated user data
            $row = $result->fetch_assoc();
            //Verify password against stored hash password 
            
            if(password_verify($password, $row['password']))
            {
                //set session variables for username and role
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $row['role'];
                   
                //Redirect the user to the appropriate dashboard
                if($row['role'] == 'admin')
                {
                    //Redirect to admin dashboard
                    header("Location: admin_dashboard.php");
                }
                else if($row['role'] == 'client')
                {
                    //Redirect to client dashboard
                    header("Location: client_dashboard.php");
                }
            }
            else
            {
                //if the password is incorrect 
                //show an error message and redirect to login page
                header("Location: index.php?incorrect");
            }
            
        }
        else{
            //No username found.
            header("Location: index.php?incorrect_username");
        }
    }
?>