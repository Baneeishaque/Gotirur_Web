<?php
include_once 'config.php';

$sql = "SELECT cart.id as cart_id,`product`.`id`, `product_name`,`company_name`, `discounted_amount`,`image_1`,`counts` FROM `product`,`cart` WHERE `product_id`=`product`.`id` AND `user_id`=" . $_SESSION["customer_id"];
//echo $sql;
$result = $con->query($sql);
 $t = 0;
 while ($row = mysqli_fetch_assoc($result)) {
     $t = $t + ($row['discounted_amount'] * $row['counts']);
     echo '<div class="row no-margin order-item">
                        <div class="col-xs-12 col-sm-1 no-margin">
                            <a href="#" class="qty">'.$row['counts'].'</a> x
                        </div>

                        <div class="col-xs-12 col-sm-9 ">
                            <div class="title"><a href="index.php?page=single-product&id='.$row['id'].'">'.$row['product_name'].'</a></div>
                            <div class="brand">'.$row['company_name'].'</div>
                        </div>

                        <div class="col-xs-12 col-sm-2 no-margin">
                            <div class="price">Rs. '.$row['discounted_amount'].'</div>
                        </div>
                    </div>';
 }
echo '
            </section><!-- /#your-order -->

            <div id="total-area" class="row no-margin">
                <div class="col-xs-12 col-lg-4 col-lg-offset-8 no-margin-right">
                    <div id="subtotal-holder">
                        <ul class="tabled-data inverse-bold no-border">
                            <li>
                                <label>cart subtotal</label>
                                <div class="value ">Rs. '.$t.'</div>
                            </li>
                            <li>
                                <label>shipping</label>
                                <div class="value">
                                    <div class="radio-group">
                                        <!--<input class="le-radio" type="radio" name="group1" value="free">--> 
                                        <div class="radio-label bold">free shipping</div><br>
                                        <!--<input class="le-radio" type="radio" name="group1" value="local" checked>  <div class="radio-label">local delivery<br><span class="bold">$15</span></div>-->
                                    </div>
                                </div>
                            </li>
                        </ul><!-- /.tabled-data -->

                        <ul id="total-field" class="tabled-data inverse-bold ">
                            <li>
                                <label>order total</label>
                                <div class="value">Rs. '.$t.'</div>
                            </li>
                        </ul><!-- /.tabled-data -->

                    </div><!-- /#subtotal-holder -->
                </div><!-- /.col -->
            </div><!-- /#total-area -->';
