
<!-- <?php
session_start();
require("connect.php");
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * from user where email = '$email' and `password` = '$password'";

$result = mysqli_query($conn, $sql);


if(isset($_POST["login"]))
{
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        header("refresh:0; url= login");    }
    else 
    {
        
        
        if(mysqli_num_rows($result) > 0)
        {
            // $_SESSION["username"] = $_POST["username"];
            header("refresh:0; url= index"); 
        }
        // else if (mysqli_num_rows($result1) > 0) {
        //     // $_SESSION["username"] = $_POST["username"];
        //     header("location:admin_page.php");

        // } 
        else {
            header("refresh:0; url= login");        }


    }
}
?> -->

