<?php

//var_dump($_POST);

include_once 'config.php';

$sql = "INSERT INTO `product`(`product_name`, `company_name`, `real_amount`, `discounted_amount`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`,`long_description`, `short_description`, `stock`, `category_id`) VALUES ('".$_POST['product_name']."','".$_POST['product_company']."','".$_POST['product_rprice']."','".$_POST['product_dprice']."','".$_POST['product_i1']."','".$_POST['product_i2']."','".$_POST['product_i3']."','".$_POST['product_i4']."','".$_POST['product_i5']."','".$_POST['product_i6']."','".$_POST['product_des']."','".$_POST['product_des']."','".$_POST['product_stock']."','".$_POST['product_cat']."')";
//echo $sql;
$con->query($sql);
//echo $con->error;

//$target_dir = "../assets/images/products/";
//$target_file = $target_dir . basename($_FILES["product_i1"]["name"]);
//move_uploaded_file($_FILES["product_i1"]["tmp_name"], $target_file);

echo '<script>alert("Added Successfully...")</script>';
echo '<script>window.location="home.php"</script>';