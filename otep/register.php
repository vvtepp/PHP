<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <span style="color: red">
        <?php
            if(isset($_GET['message']))
            {
                echo $_GET['message'];
            }
        ?>
    </span>
    <form action="register_account.php" method="post">
        <input type="text" name="firstname" id="" placeholder="Enter Firstname" required> <br><br>
        <input type="text" name="lastname" placeholder="Enter Lastname" required> <br><br>
        <input type="text" name="username" id="" placeholder="Enter Username" required> <br><br>
        <input type="password" name="password" id="" placeholder="Enter Password" required> <br><br>
        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>