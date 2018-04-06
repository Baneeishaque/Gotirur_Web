<?php

session_start();

include_once 'config.php';
//var_dump($_POST);
$qty = $_POST['qty'];
$id = $_GET['id'];
$sql = "INSERT INTO `cart`(`product_id`, `counts`,`user_id`) VALUES ($id,$qty," . $_SESSION["customer_id"] . ")";
//echo $sql;
$con->query($sql);
//echo $con->error;
echo '<script>alert("Added to Cart Successfully...")</script>';
echo '<script>window.location="index.php"</script>';


