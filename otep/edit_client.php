<?php

    session_start();

    if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin')
    {
        header("Location: index.php");
        exit();
    }

    //INCLUDE CONNECTION STRING
    include('db/connection.php');
    if(isset($_GET['ID']))
    {
        //GET THE ID VALUE
        $client_id = $_GET['ID'];
        //FETCH THE CURRENT CLIENT DATA
        $sql = "SELECT * FROM users WHERE ID = '$client_id'";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0)
        {
            $row = $result->fetch_assoc();
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $role = $row['role'];
        }
    }
    else
    {
        //NO CLIENT ID REDIRECT TO ADMIN DASHBOARD
        header("Location: admin_dashboard.php");
    }

    if(isset($_POST['update']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $role = $_POST['role'];

        $update_sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', role='$role' WHERE ID = '$client_id'";

        if($conn->query($update_sql) == TRUE)
        {
            header("Location: admin_dashboard.php?Clientupdatesuccess");
        }
        else
        {
            echo "Error Updating Client: " .$conn->error;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Edit Client</h1>
    <form action="" method="post">
        Firstname:
        <input type="text" name="firstname" id="" value="<?php echo $firstname;?>" required>
        <br>
        Lastname: 
        <input type="text" name="lastname" id="" value="<?php echo $lastname;?>" required>
        <br>
        Role: 
        <select name="role" id="">
            <option value="client" <?php if($role == 'client') echo 'selected';?>>Client</option>
            <option value="admin" <?php if($role == 'admin') echo 'selected';?>>Admin</option>
        </select>
        <br>
        <input type="submit" value="update_record" name="update">
    </form>
    <br>
    <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>