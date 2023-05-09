
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="../css/register.css"> 

</head>
<body>

<?php
        // require_once("connect.php");
        // include("process_login.php");
        // $sql = "SELECT f_name, l_name, email, phone_number, `address`, username FROM register";
        // $result = $conn-> query($sql);
?>

                </h2>


    <h1>Add Items To Menu</h1>

<div class="form-box">
    <form action="process_upload.php" method="POST" enctype="multipart/form-data" class="input-group">
    <label class="labels" for="productitem">Product Name:</label><br>
    <input type="text" name="productitem" required="true" placeholder="Product Name" class="input-field"/><br/><br/>
    
    <label class="labels" for="product_image">Image:</label><br>
    <input type="file" name="product_image" id="product_image" required="true" class="input-field" ><br/><br/>

    <label class="labels" for="unit_price">Price:</label><br>
    <input type="number" name="unit_price" id="unit_price" required="true" placeholder="Price" class="input-field"><br/><br/>

    <label for="subcategory" class="labels">Subcategory</label>

        <select name="subcategory" id="product" class="input-field">
        <option value="men_casual">Men Casual</option>
        <option value="men_formal">Men Formal</option>
        <option value="men_sport">Men Sport</option>
        <option value="women_casual">Women Casual</option>
        <option value="women_formal">Women Formal</option>
        <option value="women_sport">Women Sport</option>
        <option value="children_casual">Children Casual</option>
        <option value="children_formal">Children Formal</option>
        <option value="children_sport">Children Sport</option>
        <option value="dog_wear">Dog Wear</option>
        <option value="cat_wear">Cat Wear</option>


        </select>
    <input type="submit" name="submitImage" value="SAVE" class="register-btn">

    </form>
</div>

</body>
</html>