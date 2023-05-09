<?php
require("connect.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = md5($_POST['password']);

//Insert data
$sql_insert = "INSERT INTO tbl_users(first_name, last_name, email, gender,  `password`, `role`)
VALUES ('$first_name','$last_name', '$email', '$gender',  '$password', '1')";

//


if($conn->query($sql_insert)===TRUE){
    echo " Inserted Successfully ". "<br>";
    header("location:login.php");
}
else{
    echo " Error ".$conn->error." <br>";
}