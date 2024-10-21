<?php
    //START SESSION
    session_start();

    if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin')
    {
        header("Location: index.php");
        exit();
    }
    
    //INCLUDE CONNECTION STRING
    include('db/connection.php');

    //CREATE VARIABLE THAT WILL STORE EACH SEARCH VALUE
    $search_query = '';

    //CHECK IF A SEARCH QUERY IS SUBMITTED
    if(isset($_GET['search']))
    {
        $search_query = $conn -> real_escape_string($_GET['search']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
</head>
<body>
    <?php
        echo "Welcome Admin ".$_SESSION['username'];
    ?>
    <br> <a href="logout.php" style="float: right; text-decoration: none; color: red;">Logout</a>

    <!-- SEARCH FORM -->
    <br> <br>
    <form action="" method="get">
        <input type="text" name="search" id="" placeholder="Search by username" value="<?php echo $search_query?>">
        <select name="search_field" id="">
            <option value="username">username</option>
            <option value="firstname">firstname</option>
            <option value="lastname">lastname</option>
        </select>
        <input type="submit" value="Search">
    </form>
    <br>
    <table border="1" style="width: 70%">
        <tr align="center">
           <td>#</td>
           <td>Username</td>
           <td>Firstname</td>
           <td>Lastname</td>
           <td>Role</td> 
           <td>Action</td>
        </tr>

        <?php
            //MODIFY SQL QUERY BASED ON THE SEARCH INPUT
            if(!empty($search_query))
            {
                $search = $_GET['search'];
                $search_field = $_GET['search_field'];
                $sql = "SELECT * FROM users WHERE role='client' AND $search_field LIKE '%$search_query%' ";
            }
            else
            {
                $sql = "SELECT * FROM users WHERE role='client'";
            }
            $result = $conn -> query($sql);

            //CHECK IF ANY CLIENTS EXISTS
            if($result->num_rows > 0)
            {
                //LOOP TO DISPLAY EACH CLIENT ACCOUNT
                $count = 1;
                while($row = $result->fetch_assoc())
                {
                    $count++;
                    echo "<tr>";
                    echo "<td> $count </td>";
                    echo "<td>" .$row['username']. "</td>";
                    echo "<td>" .$row['firstname']. "</td>";
                    echo "<td>" .$row['lastname']. "</td>";
                    echo "<td>" .$row['role']. "</td>";
                    echo "<td>";
                    echo "<a href='edit_client.php>ID=" .$row['ID']." '>Edit</a> | ";
                    echo "<a href='delete_client.php>ID=" .$row['ID']." '>Delete</a> | ";
                    echo "</td>";
                    echo "</tr>";
                }
            }
            else
            {
                echo "<tr><td colspan='5'>No clients found!</tr></td>";
            }
        ?>
    </table>
</body>
</html>