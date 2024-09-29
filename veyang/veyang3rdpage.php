<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/veyang3rdpage1.css">
</head>
<body>
    <div class="box">
        <div class="box1">
            <h1>DEPOSIT RECEIPT</h1>
        </div>

        <div class="receipt">
            <?php
            session_start();
            date_default_timezone_set('Asia/Manila');
            $currentDate = date('F j, Y');
            $currentTime = date('g:i A');
            
            $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest';
            $accountNumber = isset($_POST['accnumber']) ? $_POST['accnumber'] : 'N/A'; 
            $pment = htmlspecialchars($_POST['payment']);
            $_SESSION['account_number'] = $accountNumber;
            $transactionID = mt_rand(100000, 999999);

            echo "Transaction ID: <b>$transactionID</b><br>";
            echo "Date: <b>$currentDate</b><br>";
            echo "Time: <b>$currentTime</b><br>";
            echo "Account Holder: <b>$username</b><br>";
            echo "Account Number: <b>$accountNumber</b><br>";
            echo "Payment Method: <b>$pment</b><br>";
            ?>
        </div>
    </div>
</body>
</html>