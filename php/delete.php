<?php

session_start();

    require("connect.php");
    if(isset($_GET['delete'])){
        $user_id = $_GET['delete'];
        $conn->query("DELETE FROM tbl_users WHERE `user_id` = '$user_id'");
        if ($conn->error) {
            die("Deletion failed: " . $conn->error);
          }
          echo "Deleted ";
          header("location:table.php");
          
    }



?>

