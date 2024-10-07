<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <span style="color: red">
        <?php
            if(isset($_GET['message']))
            {
                echo $_GET['message'];
            }
        ?>
    </span>
    <form action="register_account.php" method="post" class="form">
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to our app. </p>
            <div class="flex">
                <label>
                    <input required="" placeholder="" type="text" class="input">
                    <span>Firstname</span>
                </label>

                <label>
                    <input required="" placeholder="" type="text" class="input">
                    <span>Lastname</span>
                </label>
            </div>  
            
            <label>
                <input required="" placeholder="" type="text" class="input">
                <span>Username</span>
            </label> 
            
            <label>
                <input required="" placeholder="" type="password" class="input">
                <span>Password</span>
            </label>

            <button class="submit">Submit</button>
            <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
    </form>
</body>
</html>