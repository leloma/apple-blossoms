<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/menu_admin.css"> 

</head>
<body>



    <?php

require_once("connect.php");

    $sql = "SELECT tbl_product.product_id,tbl_product.product_name, tbl_product.unit_price, tbl_product.product_image ,tbl_subcategories.subcategory_name FROM tbl_product,
    tbl_subcategories WHERE tbl_product.subcategory_id = tbl_subcategories.subcategory_id AND tbl_product.subcategory_id = '1'";
    $result = $conn-> query($sql);

    
    ?>


<h1>Men Casual</h1>


    <?php
    
    if($result-> num_rows > 0 )
    { ?>
        <?php while ($row = $result-> fetch_assoc()) {?>
            <div class="boxes">
                <div class="images">
                <img src="asset/<?php echo $row['product_image'];?>" width="150" height="150" ></img>
                </div>
                <div class="details">
                    <h3 class="food-title"><?php echo $row['product_name'];?></h3>
                    <h3>Price(Kshs): <?php echo $row['unit_price'];?></h3>
                    <h3>Type: <?php echo $row['subcategory_name'];?></h3>
                    <a href="delete_menu.php?delete=<?php echo $row['product_id'];?>" class="del-btn">Delete</a>
                <a href="edit_menu_page.php?edit=<?php echo $row['product_id'];?>" class= "edit-btn">Edit</a>

                </div>
                <div class="edit_and_delete">

                </div>


            </div>

        <?php } ?>
    <?php } ?>
</body>
</html>