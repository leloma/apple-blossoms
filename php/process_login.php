
 <?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();
require("connect.php");
$email = $_POST["email"];
$password = $_POST["password"];

$sql2 = "SELECT * from tbl_users where email = '$email' and `password` = '$password' and `role` = 2";

$password = md5($password);

$sql = "SELECT * from tbl_users where email = '$email' and `password` = '$password'";


$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);



if(isset($_POST["login"]))
{
    if (empty($email) || empty($password)) {
        header("location:login.php");   
     }
    else 
    {
        
        
        if(mysqli_num_rows($result) > 0)
        {
            // $_SESSION["username"] = $_POST["username"];
            header("location:customer_product.php");   
            echo "Successful Login";
        }
        else if(mysqli_num_rows($result2) > 0)
        {
            // $_SESSION["username"] = $_POST["username"];
            header("location:admin_page.php");   
            echo "Successful Admin Login";
        }
        
        else {
            // header("location:login.php"); 
            echo "Unsuccessful";  
         }


    }
}
?> 

