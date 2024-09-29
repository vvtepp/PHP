<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/veyang2ndpage.css">
</head>
<body>
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['username'] = $_POST['uname'];
}
?>
    <div class="box">
        <form action="veyang3rdpage.php" method="POST">
        <h1>DEPOSIT CONFIRMATION</h1>
            <label for="accnumber" class="cont">Account Number: </label>
                <input type="text" class="inpt2" name="accnumber" id="accnumber" required>
            <br><br>

            <label for="amount" class="cont">Amount: </label>
                <input type="number" class="inpt3" name="amount" id="amount" required>
            <br><br>

            <label for="" class="cont">Payment Method: </label>
            <select name="payment" id="payment" class="inp1">
                <option value="Gcash">Gcash</option>
                <option value="Paymaya">Paymaya</option>
                <option value="Paypal">Paypal</option>
            </select>

            <input type="submit" value="Confirm" class="btn">
        </form>
    </div>
</body>
</html>