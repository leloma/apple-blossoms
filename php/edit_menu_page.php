
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="../css/register.css?1422585377"> 

</head>
<body>

<?php

if (isset ($_GET["edit"])) {
        require_once("connect.php");
        // include("process_login.php");
        include("process_upload.php");
        $sql = "SELECT f_name, l_name, email, phone_number, `address`, username FROM register";
        $result = $conn-> query($sql);

        // $food_name = $_POST["fooditem"];
        // $food_price = $_POST['price'];
        // $food_image_path = $_POST['food-image'];
        // $food_type = $_POST['product_type'];

        $product_id = $_GET["edit"]; // get id through query string


        $qry = mysqli_query($conn,"select * from tbl_product where product_id='$product_id'"); // select query

        $data = mysqli_fetch_array($qry); // fetch data

        
        $subcategory_id = $data['subcategory_id'];
    
?>

                <h2>
                </h2>


    <h1>Edit Menu</h1>

<div class="form-box">
    <form action="edit_menu.php" method="POST" enctype="multipart/form-data" class="input-group">

    <input type="hidden" name="product_id" value="<?php echo $data['product_id']; ?>">
    <label class="labels" for="productitem">Product Name:</label><br>
    <input type="text" name="productitem" required="true" placeholder="Product Name" class="input-field" value="<?php echo $data['product_name']?>"/><br/><br/>
    
    <label class="labels" for="product_image">Image:</label><br>
    <input type="file" name="product_image" id="product_image" required="true" class="input-field" value="<?php echo $original_file_name?>" ><br/><br/>

    <label class="labels" for="unit_price">Price:</label><br>
    <input type="number" name="unit_price" id="unit_price" required="true" placeholder="Price" class="input-field" value="<?php echo $data['unit_price']?>"><br/><br/>

    <label for="producttype" class="labels">Type </label>

        <select name="subcategory" id="product" class="input-field" >
        <option name = "product_type" value="men_casual" <?php if ($product_id == 1): ?>
            selected="selected"
            <?php endif?>
            >Men Casual</option>
        <option name = "product_type" value="men_formal" <?php if ($product_id == 2): ?>
            selected="selected"
            <?php endif?>
            >Men Formal</option>
        <option name = "product_type" value="men_sport" <?php if ($product_id == 3): ?>
            selected="selected"
            <?php endif?>
            >Men Sport</option>
        <option name = "product_type" value="women_casual" <?php if ($product_id == 4): ?>
            selected="selected" 
            <?php endif?>
        >Women Casual</option>
        <option name = "product_type" value="women_formal" <?php if ($product_id == 5): ?>
            selected="selected"
            <?php endif?>
        >Women Formal</option>
        <option name = "product_type" value="women_sport" <?php if ($product_id == 6): ?>
            selected="selected"
            <?php endif?>
        >Women Sport</option>
        <option name = "product_type" value="children_casual" <?php if ($product_id == 7): ?>
            selected="selected"
            <?php endif?>
        >Children Casual</option>
        <option name = "product_type" value="children_formal" <?php if ($product_id == 8): ?>
            selected="selected"
            <?php endif?>
        >Children Formal</option>
        <option name = "product_type" value="children_sport" <?php if ($product_id == 9): ?>
            selected="selected"
            <?php endif?>
        >Children Sport</option>
        <option name = "product_type" value="dog_wear" <?php if ($product_id == 10): ?>
            selected="selected"
            <?php endif?>
        >Dog Wear</option>
        <option name = "product_type" value="cat_wear" <?php if ($product_id == 11): ?>
            selected="selected"
            <?php endif?>
        >Cat Wear</option>

        </select>
    <input type="submit" name="submitImage" value="SAVE" class="register-btn">

    </form>

</div>
<?php }  ?>



</body>
</html>