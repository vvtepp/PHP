<?php
              if(isset($_GET['incorrect'])){
                  echo "Incorrect Username or Password!.";
              }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Basic styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #d7e7f6, #b3d4f0);
            font-family: 'Poppins', sans-serif;
        }
        
        .container {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        
        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #d1e3f0;
            border-radius: 8px;
            background-color: #f0f8ff;
        }

        .input-field:focus {
            border-color: #90caf9;
            background-color: #e3f2fd;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #90caf9;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #64b5f6;
        }

        .error-message {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login container">
<form action="donation_details.php" method="POST">
    <h2>Donor Login</h2>
    <?php if (isset($error_message)): ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>
        <input type="email" class="input-field" name="email" placeholder="Email" required>
        <input type="password" class="input-field" name="password" placeholder="Password" required>
        <button type="login" class="btn">Login</button>
        <br><br>
        <button type="logout" class="btn">Logout</button>
    </form>
    <p class="info">Don't have an account? <a href="register.php">Register here</a></p>
</div>
</body>
</html>

