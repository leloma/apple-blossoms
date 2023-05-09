<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page </title>
    <link rel="stylesheet" href="../css/table.css?1422585377"> 
    
</head>
<body>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php
        require_once("connect.php");
        // include("process_login.php");
        $sql = "SELECT `user_id`, first_name, last_name, email, gender FROM tbl_users";
        $result = $conn-> query($sql);
        ?>

                <h1>
                </h1>

                <h2>Customers</h2>

        <?php
        if($result-> num_rows > 0 )
        { ?>
            <?php while ($row = $result-> fetch_assoc()) {?>
                <tr>
                    <td><?php echo $row['first_name'];?></td>
                    <td><?php echo $row['last_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['gender'];?></td>

                    <td><a href="delete.php?delete=<?php echo $row['user_id'];?>" class="del-btn">Delete</a></td>

                </tr>

            <?php } ?>
            <?php echo "</table>";?>
        <?php } ?>


        </table>
</body>
</html>
            
