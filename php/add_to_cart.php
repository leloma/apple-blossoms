<?php
    session_start();
    require_once("connect.php");
  
    if (isset($_POST["add_to_cart"])) {
        if (isset($_SESSION["shopping_cart"])) {
            $product_array_id = array_column($_SESSION["shopping_cart"], "product_id");
            if (!in_array($_GET["id"], $product_array_id)) {
                $count = count($_SESSION["shopping_cart"]);
                $product_array = array(
                    'product_id' => $_GET["id"],
                    'product_name' => $_POST["product_name"],
                    'unit_price' => $_POST["unit_price"],
                    'quantity' => $_POST["quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $product_array;
                
            }

        }

        else {
            $product_array = array(
                'product_id' => $_GET["id"],
                'product_name' => $_POST["product_name"],
                'unit_price' => $_POST["unit_price"],
                'quantity' => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][0] = $product_array;
        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add To Cart</title>
    <link rel="stylesheet" href="../css/menu_admin.css?1422585377"> 

</head>
<body>

<?php
        // require_once("connect.php");
        // include("process_login.php");
        // $sql = "SELECT f_name, l_name, email, phone_number, `address`, username FROM register";
        // $result = $conn-> query($sql);
?>

                <h2>
                </h2>





    <?php
if (isset($_POST["order_btn"])) {


    $product_id = $_POST["product_id"];
    $sql = "SELECT tbl_product.product_id,tbl_product.product_name, tbl_product.unit_price, tbl_product.product_image ,tbl_subcategories.subcategory_name FROM tbl_product,
    tbl_subcategories WHERE tbl_product.subcategory_id = tbl_subcategories.subcategory_id AND tbl_product.product_id = $product_id";
    
    $result = $conn-> query($sql);

    
    ?>

    <?php
    
    if($result !== false && $result-> num_rows > 0 )
    { ?>
        <?php while ($row = $result-> fetch_assoc()) {?>
            <div  class="boxes center_box" >
                <div class="images">
                <img src="asset/<?php echo $row['product_image'];?>" width="150" height="150" ></img>
                </div>

                <form method="POST" action="add_to_cart.php?action=add&id=<?php echo $row["product_id"];  ?>">
                <div class="details">

                    <h3 class="food-title"><?php echo $row['product_name'];?></h3>
                    <h3>Price(Kshs): <?php echo $row['unit_price'];?></h3>
                    <h3>Type: <?php echo $row['subcategory_name'];?></h3>
                    <label for="quantity">Quantity</label><br>
                    <input type="number" name="quantity" id="quantity"  required="true" placeholder="Quantity" class="input-field"><br/><br/>
                    <input type="hidden" name="product_id" value="<?php echo $row["product_id"]; ?>"  />
                    <input type="hidden" name="product_name" value="<?php echo $row["product_name"]; ?>"  />
                    <input type="hidden" name="unit_price" value="<?php echo $row["unit_price"]; ?>"  />

                    <input type="submit" name="add_to_cart" class= "edit-btn" value="Add To Cart"/><br></br>


                </div>
        </form>


            </div>

        <?php } ?>
    <?php }else {
            echo "No records Found";
            } } ?>
    <?php
        
    ?>
</body>
</html>