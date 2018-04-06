<div class="top-cart-row-container">
    <div class="wishlist-compare-holder">
        <div class="wishlist ">
            <!--<a href="#"><i class="fa fa-heart"></i> wishlist <span class="value"></span> </a>-->

            <?php
            include_once 'config.php';
            $sql = "SELECT wishlist.id as cart_id,`product`.`id`, `product_name`, `discounted_amount`,`image_1` FROM `product`,`wishlist` WHERE `item_ID`=`product`.`id` AND `customer_id`=" . $_SESSION["customer_id"];
//            echo $sql;
            $result = $con->query($sql);
//            echo $con->error;
            if (mysqli_num_rows($result) != 0) {
                echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-heart"></i> wishlist <span class="value">(' . mysqli_num_rows($result) . ')</span> 
            </a>

            <ul class="dropdown-menu">';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<li>
                <div class="basket-item">
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 no-margin text-center">
                            <div class="thumb">
                                <img  width="73" height="73" alt="" src="assets/images/products/' . $row['image_1'] . '" />
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8 no-margin">
                             <div class="title"><a href="index.php?page=single-product&id='.$row['id'].'">'.$row['product_name'].'</a></div>
                             <div class="price">Rs. ' . $row['discounted_amount'] . '</div>
                        </div>
                    </div>
                   <a class="close-btn" href="RemoveFromWishlist.php?id=' . $row['cart_id'] . '"></a>
                </div>
            </li>
            <br/>';
                }
            } else {
                echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-heart"></i> wishlist <span class="value">(0)</span> 
            </a>

            <ul class="dropdown-menu">';
            }
            ?>
            <!--            <li>
                            <div class="basket-item">
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 no-margin text-center">
                                        <div class="thumb">
                                            <img alt="" src="assets/images/products/product-small-01.jpg" />
                                        </div>
                                    </div>
                                    <div class="col-xs-8 col-sm-8 no-margin">
                                        <div class="title">Blueberry</div>
                                        <div class="price">$270.00</div>
                                    </div>
                                </div>
                                <a class="close-btn" href="#"></a>
                            </div>
                        </li>
                        <br/>-->
            <!--                <li>
                                <div class="basket-item">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin text-center">
                                            <div class="thumb">
                                                <img alt="" src="assets/images/products/product-small-01.jpg" />
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <div class="title">Blueberry</div>
                                            <div class="price">$270.00</div>
                                        </div>
                                    </div>
                                    <a class="close-btn" href="#"></a>
                                </div>
                            </li>
            
                            <li>
                                <div class="basket-item">
                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 no-margin text-center">
                                            <div class="thumb">
                                                <img alt="" src="assets/images/products/product-small-01.jpg" />
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-sm-8 no-margin">
                                            <div class="title">Blueberry</div>
                                            <div class="price">$270.00</div>
                                        </div>
                                    </div>
                                    <a class="close-btn" href="#"></a>
                                </div>
                            </li>-->


            <!--                <li class="checkout">
                                <div class="basket-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <a href="index.php?page=cart" class="le-button inverse">View cart</a>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <a href="index.php?page=checkout" class="le-button">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </li>-->

            </ul>
        </div>

    </div>

    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
    <!--    <div class="top-cart-holder dropdown animate-dropdown">
    
            <div class="basket">
    
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <div class="basket-item-count">
                        
    <?php
//                include_once 'config.php';
//                $sql = "SELECT wishlist.id as cart_id,`product`.`id`, `product_name`, `discounted_amount`,`image_1` FROM `product`,`wishlist` WHERE `item_ID`=`product`.`id` AND `customer_id`=" . $_SESSION["customer_id"];
////                echo $sql;
//                $result = $con->query($sql);
//                if (mysqli_num_rows($result) != 0) {
//                    
//                    echo '<span class="count">'.mysqli_num_rows($result).'</span>
//                    <img src="assets/images/icon-cart.png" alt="" />
//                </div>
//
//                
//            </a>
//
//            <ul class="dropdown-menu">';
//                    
//                    while ($row = mysqli_fetch_assoc($result)) {
//                        echo '<li>
//                    <div class="basket-item">
//                        <div class="row">
//                            <div class="col-xs-4 col-sm-4 no-margin text-center">
//                                <div class="thumb">
//                                    <img alt="" src="assets/images/products/' . $row['image_1'] . '" />
//                                </div>
//                            </div>
//                            <div class="col-xs-8 col-sm-8 no-margin">
//                                <div class="title">' . $row['product_name'] . '</div>
//                                <div class="price">Rs. ' . $row['discounted_amount'] . '</div>
//                            </div>
//                        </div>
//                        <a class="close-btn" href="RemoveFromWishlist.php?id=' . $row['cart_id'] . '"></a>
//                    </div>
//                </li>';
//                    }
//                }
// else {
//     echo '<span class="count">0</span>
//                    <img src="assets/images/icon-cart.png" alt="" />
//                </div>
//
//                <div class="total-price-basket"> 
//                    <span class="lbl">your cart:</span>
//                    <span class="total-price">
//                        <span class="sign">Rs.</span><span class="value">00</span>
//                    </span>
//                </div>
//            </a>
//
//            <ul class="dropdown-menu">';
// }
    ?>
    
                   
    
                </ul>
            </div>
                     /.basket 
        </div>
             /.top-cart-holder 
    </div>-->
    <!-- /.top-cart-row-container -->
    <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->

    <div class="top-cart-holder dropdown animate-dropdown">

        <div class="basket">

            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="basket-item-count">

                    <?php
                    include_once 'config.php';
                    $sql = "SELECT cart.id as cart_id,`product`.`id`, `product_name`, `discounted_amount`,`image_1`,`counts` FROM `product`,`cart` WHERE `product_id`=`product`.`id` AND `user_id`=" . $_SESSION["customer_id"];
//                echo $sql;
                    $result = $con->query($sql);
                    if (mysqli_num_rows($result) != 0) {

                        $empty_array = array();
                        $t = 0;
                        $c = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $empty_array[] = $row;
                            $t = $t + ($row['discounted_amount'] * $row['counts']);
                            $c = $c + $row['counts'];
                        }

                        echo '<span class="count">' . $c . '</span>
                    <img src="assets/images/icon-cart.png" alt="" />
                </div>

                <div class="total-price-basket"> 
                    <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">Rs.</span><span class="value">' . $t . '</span>
                    </span>
                </div>
            </a>

            <ul class="dropdown-menu">';
//                        var_dump($empty_array);
                        for ($i = 0; $i < count($empty_array); $i++) {
                            echo '<li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                    <img width="73" height="73" alt="" src="assets/images/products/' . $empty_array[$i]['image_1'] . '" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title"><a href="index.php?page=single-product&id='.$empty_array[$i]['id'].'">' . $empty_array[$i]['product_name'] . ' x ' . $empty_array[$i]['counts'] . '</a></div>
                                <div class="price">Rs. ' . $empty_array[$i]['discounted_amount'] . '</div>
                            </div>
                        </div>
                        <a class="close-btn" href="RemoveFromCart.php?id=' . $empty_array[$i]['cart_id'] . '"></a>
                    </div>
                </li>';
                        }
                    } else {
                        echo '<span class="count">0</span>
                    <img src="assets/images/icon-cart.png" alt="" />
                </div>

                <div class="total-price-basket"> 
                    <span class="lbl">your cart:</span>
                    <span class="total-price">
                        <span class="sign">Rs.</span><span class="value">00</span>
                    </span>
                </div>
            </a>

            <ul class="dropdown-menu">';
                    }
                    ?>


                    <li class="checkout">
                        <div class="basket-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <a href="index.php?page=cart" class="le-button inverse">View cart</a>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <a href="index.php?page=checkout" class="le-button">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div><!-- /.basket -->
        </div><!-- /.top-cart-holder -->
    </div>