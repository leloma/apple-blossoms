<?php
require("connect.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = $_POST['password'];

//Insert data
$sql_insert = "INSERT INTO user(firstname, lastname, email, gender,  `password`)
VALUES ('$first_name','$last_name', '$email', '$gender',  '$password')";

//


if($conn->query($sql_insert)===TRUE){
    echo " Inserted Successfully ". "<br>";
}
else{
    echo " Error ".$conn->error." <br>";
}


?>



