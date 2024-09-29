<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/veyangfront.css">
</head>
<body>
<?php
session_start();
?>
    <div class="box">
        <form action="veyang2ndpage.php" method="POST">
        <h1>LOGIN</h1>
            <label for="uname" class="cont">Username: </label>
            <input type="text" class="inpt1" name="uname" id="uname" required>
            <br><br>

            <label for="pword" class="cont">Password: </label>
            <input type="password" class="inpt" name="pword" id="pword" required>
            <br><br>

            <input type="submit" value="Log in" class="btn">
        </form>
    </div>
</body>
</html>
