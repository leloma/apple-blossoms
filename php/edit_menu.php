<?php

require_once("dbconnect.php");
$subcategory = "Men Casual";
$subcategory_id = 0;
if (isset($_POST["submitImage"])) {
    $file = $_FILES["product_image"];
    $file_path="asset/";

    $original_file_name = $_FILES['product_image']['name'];
    $file_tmp_location = $_FILES['product_image']['tmp_name'];

    if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
        if(!empty($_POST['subcategory'])) {
            $subcategory = $_POST['subcategory'];
            if ($subcategory == "men_casual") {
                $subcategory_id = 1;
            }
            else if ($subcategory == "men_formal") {
                $subcategory_id = 2;
            }
            else if ($subcategory == "men_sport") {
                $subcategory_id = 3;
            }
            else if ($subcategory == "women_casual") {
                $subcategory_id = 4;
            }
            else if ($subcategory == "women_formal") {
                $subcategory_id = 5;
            }
            else if ($subcategory == "women_sport") {
                $subcategory_id = 6;
            }
            else if ($subcategory == "children_casual") {
                $subcategory_id = 7;
            }
            else if ($subcategory == "children_formal") {
                $subcategory_id = 8;
            }
            else if ($subcategory == "children_sport") {
                $subcategory_id = 9;
            }
            else if ($subcategory == "dog_wear") {
                $subcategory_id = 10;
            }
            else if ($subcategory == "cat_wear") {
                $subcategory_id = 11;
            }

        }

        $product_name = $_POST["productitem"];
        $unit_price = $_POST["unit_price"];

    

        $product_id = $_POST['product_id'];

        $sql = "UPDATE tbl_product set product_name='$product_name', product_image='$original_file_name',
        unit_price ='$unit_price', `subcategory_id`='$subcategory_id' where `product_id`='$product_id'";

        if(setData($sql)){
            header("location:menu_admin.php");
        }

    };

    
}


?>