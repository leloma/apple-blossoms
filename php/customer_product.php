<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/admin_page.css"> 

</head>
<body>

<?php
        // require_once("connect.php");
        // include("process_login.php");
        // $email = $_POST["email"];
        // $sql = "SELECT first_name FROM tbl_users WHERE $email = email";
        // $result = $conn-> query($sql);
        // $_SESSION["first_name"] = $result['first_name'];
?>

                <h2>
                </h2>
<h2><a href="view_cart.php">VIEW CART</a></h2>
<h2><a href="logout.php" class="menu_link">LOG OUT</a></h2> 




<h1>PRODUCTS</h1>

<div class="links">
<a href="cust_men_casual.php" >Men Casual</a>
</div>
<div class="links">
<a href="cust_men_formal.php" >Men Formal</a>
</div>
<div class="links">
<a href="cust_men_sport.php" >Men Sport</a>
</div>
<div class="links">
<a href="cust_women_casual.php" >Women Casual</a>
</div>
<div class="links">
<a href="cust_women_formal.php" >Women Formal</a>
</div>
<div class="links">
<a href="cust_women_sport.php" >Women Sport</a>
</div>
<div class="links">
<a href="cust_children_casual.php" >Children Casual</a>
</div>
<div class="links">
<a href="cust_children_formal.php" >Children Formal</a>
</div>
<div class="links">
<a href="cust_children_sport.php" >Children Sport</a>
</div>
<div class="links">
<a href="cust_dog_wear.php" >Dog Wear</a>
</div>
<div class="links">
<a href="cust_cat_wear.php" >Cat Wear</a>
</div>


    <?php

// include("breakfast_menu.php");
// include("lunch_menu.php");
// include("dinner_menu.php");
// include("drinks_menu.php");
// include("dessert_menu.php");

//     $sql = "SELECT food_menu.food_id,food_menu.food_name, food_menu.food_price, food_menu.food_image_path ,menu_type.food_type_name FROM food_menu,
//     menu_type WHERE food_menu.type_id = menu_type.type_id";
//     $result = $conn-> query($sql);

    
    ?>



</body>
</html>