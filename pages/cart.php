<?php
include_once '/../config.php';
//if (isset($_GET['id'])) {
//    $sql = "INSERT INTO `cart`(`product_id`, `counts`, `user_id`) VALUES ('" . $_GET['id'] . "',0,0)";
//    //echo $sql;
//    if (!$con->query($sql)) {
//        echo $con->error;
//    }
//}

$sql = "SELECT cart.id as cart_id,`product`.`id`, `product_name`,`company_name`, `discounted_amount`,`image_1`,`counts` FROM `product`,`cart` WHERE `product_id`=`product`.`id` AND `user_id`=" . $_SESSION["customer_id"];
//echo $sql;
$result = $con->query($sql);
?>

<section id="cart-page">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <div class="col-xs-12 col-md-9 items-holder no-margin">

            <?php
            $t = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $t = $t + ($row['discounted_amount'] * $row['counts']);
                echo '<div class="row no-margin cart-item">
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <a href="#" class="thumb-holder">
                                    <img class="lazy"  width="73" height="73" alt="" src="assets/images/products/' . $row['image_1'] . '" />
                                </a>
                            </div>
            
                            <div class="col-xs-12 col-sm-5 ">
                                <div class="title">
                                    <a href="#">' . $row['product_name'] . '</a>
                                </div>
                                <div class="brand">' . $row['company_name'] . '</div>
                            </div> 
            
                            <div class="col-xs-12 col-sm-3 no-margin">
                                <div class="quantity">
                                    <div class="le-quantity">
                                            <input name="quantity" readonly="readonly" disabled="disabled" type="text" value="' . $row['counts'] . '" />
                                    </div>
                                </div>
                            </div> 
            
                            <div class="col-xs-12 col-sm-2 no-margin">
                                <div class="price">
                                    Rs.' . ($row['discounted_amount']*$row['counts']) . '
                                </div>
                                <a class="close-btn" href="RemoveFromCart.php?id=' . $row['cart_id'] . '"></a>
                            </div>
                        </div>';
            }
            ?>

           
        </div>
        <!-- ========================================= CONTENT : END ========================================= -->

        <!-- ========================================= SIDEBAR ========================================= -->

        <div class="col-xs-12 col-md-3 no-margin sidebar ">
            <div class="widget cart-summary">
                <h1 class="border">shopping cart</h1>
                <div class="body">
                    <ul class="tabled-data no-border inverse-bold">
                        <li>
                            <label>cart subtotal</label>
                            <div class="value pull-right">Rs. <?php echo $t; ?></div>
                        </li>
                        <li>
                            <label>shipping</label>
                            <div class="value pull-right">free shipping</div>
                        </li>
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label>order total</label>
                            <div class="value pull-right">Rs. <?php echo $t; ?></div>
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <a class="le-button big" href="<?php echo BASE_URL; ?>/index.php?page=checkout" >checkout</a>
                        <a class="simple-link block" href="<?php echo BASE_URL; ?>/index.php" >continue shopping</a>
                    </div>
                </div>
            </div><!-- /.widget -->

        </div><!-- /.sidebar -->

        <!-- ========================================= SIDEBAR : END ========================================= -->
    </div>
</section>