<?php
session_start();
unset($_SESSION["shopping_cart"]);
header("location:homepage.php");

?>