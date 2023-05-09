<?php
session_start();
require_once("connect.php");

if(isset($_POST["remove"]))
{
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if ($values["product_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                header("location:view_cart.php");
        }
    }
}

if(isset($_POST["checkout"])){
    $sql = "INSERT INTO tbl_order(customer_id, order_amount, order_status) VALUES (32, 8200, 'Paid')";
    if($conn->query($sql)===TRUE){
        echo "Order Placed ". "<br>";
    } else {
        echo "Something went worng". "<br>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/table.css?1422585377"> 

</head>
<body>

<?php
        // $sql = "SELECT f_name, l_name, email, phone_number, `address`, username FROM register";
        // $result = $conn-> query($sql);
?>

                <h1>
                </h1>

    <h2>Order Details</h2>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>

        </tr>

        <?php
            if (!empty($_SESSION["shopping_cart"])) {
                $total = 0; 
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
                    ?>
                    <tr>
                        <td><?php echo $values["product_name"]; ?></td>
                        <td><?php echo $values["quantity"]; ?></td>
                        <td><?php echo $values["unit_price"]; ?></td>
                        <td><?php echo ($values["quantity"] * $values["unit_price"]); ?></td>
                        <td>
                        <form method="POST" action="view_cart.php?action=delete&id=<?php echo $row["product_id"];  ?>">

                        <input type="submit" name="remove" class= "delete-btn" value="Remove"/>
                        
                    </td>

                    </tr>
                    </form>

                    <?php
                    
                        $total = $total + ($values["quantity"] * $values["unit_price"]);
                        
                }?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">Kshs <?php echo $total?></td>
                    <td></td>
                </tr>
            <?php } ?>
            <form action="view_cart.php" method="POST">
                <input type="submit" name="checkout" class= "edit-btn" value="Check Out"/>
            </form>

    </table>
    <!-- <input type="submit" name="checkout" class= "edit-btn" value="Check Out"/> -->

</body>
</html>