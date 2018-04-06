<?php

session_start();

include_once 'config.php';
//$sql = "INSERT INTO `customer`(`c_name`, `c_address`) VALUES ('" . $_GET['bill_name'] . "','" . $_GET['bill_address'] . "')";
$sql = "INSERT INTO `user`(`name`, `address`, `email`, `mobile`) VALUES ('" . $_GET['full_name'] . ' ' . $_GET['last_name'] . "','" . $_GET['address'] . "','" . $_GET['email'] . "','" . $_GET['phone'] . "')";
//echo $sql;
$con->query($sql);
$last_id = $con->insert_id;

$sql = "SELECT cart.id as cart_id,`product`.`id`, `product_name`,`company_name`, `discounted_amount`,`image_1`,`counts`,`stock` FROM `product`,`cart` WHERE `product_id`=`product`.`id` AND `user_id`=" . $_SESSION["customer_id"];

$result = $con->query($sql);
while ($row = mysqli_fetch_assoc($result)) {

    $sql = "INSERT INTO `orders`(`model_id`, `quantity`, `customer_id`, `amount`, `odate`, `expecteddate`) VALUES 
    (" . $row['id'] . "," . $row['counts'] . ",$last_id," . ($row['discounted_amount'] * $row['counts']) . ",NOW(),NOW())";

//    echo $sql;
    $con->query($sql);

    $sql = "DELETE from `cart` where id=" . $row['cart_id'];
//    echo $sql;
    $con->query($sql);
    
    $sql = "UPDATE `product` SET `stock` = '".($row['stock']-$row['counts'])."' WHERE `id` =" . $row['id'];
//    echo $sql;
    $con->query($sql);
    
    
}

echo '<script>alert("Ordered Successfully...")</script>';
echo '<script>window.location="index.php"</script>';


