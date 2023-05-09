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
    tbl_subcategories WHERE tbl_product.subcategory_id = tbl_subcategories.subcategory_id AND tbl_product.subcategory_id = '6'";
    $result = $conn-> query($sql);

    
    ?>


<h1>Women Sport</h1>


    <?php
    
    if($result-> num_rows > 0 )
    { ?>
        <?php while ($row = $result-> fetch_assoc()) {?>
            <div class="boxes">
                <div class="images">
                <img src="asset/<?php echo $row['product_image'];?>" width="150" height="150" ></img>
                </div>

                <form method="POST" action="add_to_cart.php">
                <div class="details">
                <input type="hidden" readonly name="product_id" value="<?php echo $row['product_id']; ?>">
                    <h3 class="food-title"><?php echo $row['product_name'];?></h3>
                    <h3>Price(Kshs): <?php echo $row['unit_price'];?></h3>
                    <button type="submit" name="order_btn" class= "edit-btn">Order</button>
                </div>
        </form>
                <div class="edit_and_delete">

                </div>


            </div>

        <?php } ?>
    <?php } ?>
</body>
</html>