<?php
include('db/connection.php');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Check if form was submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Retrieve form data
//     $donor_name = isset($_POST['donor_name']) ? $_POST['donor_name'] : 'Anonymous';
//     $email = htmlspecialchars($_POST['email']);
//     $donation_amount = isset($_POST['donation_amount']) ? (float) $_POST['donation_amount'] : 0.0;
//     $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

//     // Establish connection to MySQL database
//     $conn = new mysqli($servername, $username, $password, $dbname);

//     // Check connection
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     // Prepare an SQL statement to prevent SQL injection
//     $addusersql = "INSERT INTO users (donor_name, email, donation_amount, message)
//         VALUES ('$donor_name', '$email', '$donation_amount', '$message')";

//     if ($conn->query($addusersql) === TRUE) {
//         header("Location: donation_details.php");
//         exit();  // Ensure no further code is executed after the redirect
//     } else {
//         echo "Error: " . $addusersql . "<br>" . $conn->error;
//     }

//     // Close the connection
//     $conn->close();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Details</title>
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
            max-width: 600px;
            width: 100%;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 10px 20px;
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

        .back-link {
            margin-top: 20px;
            display: block;
            text-decoration: none;
            color: #4CAF50;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Your Donation Details</h2>

    <table border="1" style="width: 100%;">
        <tr align="center">
            <td>#</td>
            <td>Donor Name</td>
            <td>Amount</td>
            <td>Date</td>
            <td>Status</td>
            <td>Action</td>
        </tr>

    <?php
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    
    // Check if any clients exist
    if ($result->num_rows > 0) {
        // Loop to display each client account
        $count = 1;
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td> $count </td>";
            echo "<td>" . $row['donor_name'] . "</td>";
            echo "<td>" . $row['donation_amount'] . "</td>";
            echo "<td>" . $row['donation_date'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>";
            echo "<a href='edit_client.php?ID=" . $row['ID'] . "'>Edit</a> | ";
            echo "<a href='delete_client.php?ID=" . $row['ID'] . "'>Delete</a>";
            echo "</td>";
            echo "</tr>";
            $count++;
        }
    }
            ?>
            </table>
            <a href="register.php">reg</a>

</div>

</body>
</html>
