<?php
include_once '/../script/config.php';
$sql = "select * from product where id=" . $_GET['id'];
$result = $con->query($sql);
$row = mysqli_fetch_assoc($result);
?>

<div id="single-product">
    <div class="container">

        <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
            <div class="product-item-holder size-big single-product-gallery small-gallery">

                <div id="owl-single-product">
                    <div class="single-product-gallery-item" id="slide1">
                        <a data-rel="prettyphoto" href="assets/images/products/<?php echo $row['image_1']; ?>">
                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_1']; ?>" />
                        </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide2">
                        <a data-rel="prettyphoto" href="assets/images/products/<?php echo $row['image_2']; ?>">
                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_2']; ?>" />
                        </a>
                    </div><!-- /.single-product-gallery-item -->

                    <div class="single-product-gallery-item" id="slide3">
                        <a data-rel="prettyphoto" href="assets/images/products//<?php echo $row['image_3']; ?>">
                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_1']; ?>" />
                        </a>
                    </div><!-- /.single-product-gallery-item -->
                </div><!-- /.single-product-slider -->


                <div class="single-product-gallery-thumbs gallery-thumbs">

                    <div id="owl-single-product-thumbnails">
                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                            <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_1']; ?>" />
                        </a>

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                            <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_2']; ?>" />
                        </a>

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                            <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_3']; ?>" />
                        </a>

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                            <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_4']; ?>" />
                        </a>

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                            <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_5']; ?>" />
                        </a>

                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                            <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/<?php echo $row['image_6'] ?>" />
                        </a>

                    </div><!-- /#owl-single-product-thumbnails -->

                    <div class="nav-holder left hidden-xs">
                        <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
                    </div><!-- /.nav-holder -->

                    <div class="nav-holder right hidden-xs">
                        <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
                    </div><!-- /.nav-holder -->

                </div><!-- /.gallery-thumbs -->

            </div><!-- /.single-product-gallery -->
        </div><!-- /.gallery-holder -->

        <div class="no-margin col-xs-12 col-sm-7 body-holder">
            <div class="body">
                <!--<div class="star-holder inline"><div class="star" data-score="4"></div></div>-->
                <?php
//                echo $row['stock'];
                if ($row['stock'] > 0) {
                    echo '<div class="availability"><label>Availability:</label><span class="available">' . $row['stock'] . ' in stock</span></div>';
                    $available = TRUE;
                } else {
                    echo '<div class="availability"><label>Availability:</label><span class="available">Unavailable</span></div>';
                }
                ?>


                <div class="title"><a href="#"><?php echo $row['product_name']; ?></a></div>
                <div class="brand"><?php echo $row['company_name']; ?></div>


                <div class="social-row">
                    <span class="st_facebook_hcount"></span>
                    <span class="st_twitter_hcount"></span>
                    <span class="st_pinterest_hcount"></span>
                </div>     

                <div class="buttons-holder">
                    <a class="btn-add-to-wishlist" href="insertToWishlist.php?id=<?php echo $row['id']; ?>">Add to Wishlist</a>
                </div>     

                <div class="excerpt">
                    <p><?php echo $row['short_description']; ?></p>
                </div>             

                <div class="prices">
                    <div class="price-current">Rs. <?php echo $row['real_amount']; ?></div>
                    <div class="price-prev">Rs. <?php echo $row['discounted_amount']; ?></div>
                </div>

                <?php
                if ($available === TRUE) {
                    echo '<div class="qnt-holder">
                    <div class="le-quantity">
                        <form action="insertToCart.php?id='.$_GET['id'].'" method="POST">
                            <a class="minus" href="#reduce"></a>
                            <input name="qty" readonly="readonly" type="text" value="1" />
                            <a class="plus" href="#add"></a>
                    </div>        
                    <br/>
                    <br/>
                    <input id="addto-cart" class="le-button huge" type="submit" value="add to cart" />
                    </form>

                </div>
                <!-- /.qnt-holder -->';
                }
                ?>

            </div><!-- /.body -->

        </div><!-- /.body-holder -->

    </div><!-- /.container -->
</div><!-- /.single-product -->

<?php //require MC_ROOT . '/parts/section/single-product-tab.php';   ?>


<?php
$containerClass = isset($containerClass) ? $containerClass : 'container';
$hasSidebar = isset($hasSidebar) ? $hasSidebar : false;
?>
<!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
<section id="single-product-tab">
    <div class="<?php echo $containerClass; ?>">
        <div class="tab-holder">

            <ul class="nav nav-tabs simple" >
                <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#additional-info" data-toggle="tab">Additional Information</a></li>
                <li><a href="#reviews" data-toggle="tab">Reviews (1)</a></li>
            </ul><!-- /.nav-tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="description">
                    <p><?php echo $row['long_description']; ?></p>

                    <div class="meta-row">
                        <div class="inline">
                            <label>SKU:</label>
                            <span>54687621</span>
                        </div><!-- /.inline -->

                        <span class="seperator">/</span>

                        <div class="inline">
                            <label>categories:</label>
                            <span><a href="#">-50% sale</a>,</span>
                            <span><a href="#">gaming</a>,</span>
                            <span><a href="#">desktop PC</a></span>
                        </div><!-- /.inline -->

                        <span class="seperator">/</span>

                        <?php
                        $sql = "SELECT `tag_name` FROM `tag_relation`,`tags` WHERE product_id=1 AND tag_id=`tags`.`id`
";
                        $result = $con->query($sql);
                        echo '<div class="inline">
                            <label>tag:</label>';
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<span><a href="#">' . $row['tag_name'] . '</a>,</span>';
                        }
                        echo '</div><!-- /.inline -->
                    </div><!-- /.meta-row -->
                </div><!-- /.tab-pane #description -->
                ';
                        ?>


                        <div class="tab-pane" id="additional-info">
                            <ul class="tabled-data">
                                <li>
                                    <label>weight</label>
                                    <div class="value">7.25 kg</div>
                                </li>
                                <li>
                                    <label>dimensions</label>
                                    <div class="value">90x60x90 cm</div>
                                </li>
                                <li>
                                    <label>size</label>
                                    <div class="value">one size fits all</div>
                                </li>
                                <li>
                                    <label>color</label>
                                    <div class="value">white</div>
                                </li>
                                <li>
                                    <label>guarantee</label>
                                    <div class="value">5 years</div>
                                </li>
                            </ul><!-- /.tabled-data -->

                            <div class="meta-row">
                                <div class="inline">
                                    <label>SKU:</label>
                                    <span>54687621</span>
                                </div><!-- /.inline -->

                                <span class="seperator">/</span>

                                <div class="inline">
                                    <label>categories:</label>
                                    <span><a href="#">-50% sale</a>,</span>
                                    <span><a href="#">gaming</a>,</span>
                                    <span><a href="#">desktop PC</a></span>
                                </div><!-- /.inline -->

                                <span class="seperator">/</span>

                                <div class="inline">
                                    <label>tag:</label>
                                    <span><a href="#">fast</a>,</span>
                                    <span><a href="#">gaming</a>,</span>
                                    <span><a href="#">strong</a></span>
                                </div><!-- /.inline -->
                            </div><!-- /.meta-row -->
                        </div><!-- /.tab-pane #additional-info -->


                        <div class="tab-pane" id="reviews">
                            <div class="comments">

                                <?php
//                    include_once '/../script/config.php';
                                $sql = "select * from reviews where product_id=1";
                                $result = $con->query($sql);
//                        $row = mysqli_fetch_assoc($result);
                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo ' <div class="comment-item">
                            <div class="row no-margin">
                                <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                    <div class="avatar">
                                        <img alt="avatar" src="assets/images/default-avatar.jpg">
                                    </div><!-- /.avatar -->
                                </div><!-- /.col -->

                                <div class="col-xs-12 col-lg-11 col-sm-10 <?php if(!$hasSidebar):?>no-margin<?php endif;?>">
                                    <div class="comment-body">
                                        <div class="meta-info">
                                            <div class="author inline">
                                                <a href="#" class="bold">' . $row['author'] . '</a>
                                            </div>
                                            <div class="star-holder inline">
                                                <div class="star" data-score="' . $row['rating'] . '"></div>
                                            </div>
                                            <div class="date inline pull-right">
                                                ' . $row['post_date'] . '
                                            </div>
                                        </div><!-- /.meta-info -->
                                        <p class="comment-text">
                                            ' . $row['content'] . ' 
                                        </p><!-- /.comment-text -->
                                    </div><!-- /.comment-body -->

                                </div><!-- /.col -->

                            </div><!-- /.row -->
                        </div><!-- /.comment-item -->
                   ';
                                }
                                ?>

                                <!--                                <div class="comment-item">
                                                                    <div class="row no-margin">
                                                                        <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                                                            <div class="avatar">
                                                                                <img alt="avatar" src="assets/images/default-avatar.jpg">
                                                                            </div> /.avatar 
                                                                        </div> /.col 
                                
                                                                        <div class="col-xs-12 col-lg-11 col-sm-10 <?php if (!$hasSidebar): ?>no-margin<?php endif; ?>">
                                                                            <div class="comment-body">
                                                                                <div class="meta-info">
                                                                                    <div class="author inline">
                                                                                        <a href="#" class="bold">Jane Smith</a>
                                                                                    </div>
                                                                                    <div class="star-holder inline">
                                                                                        <div class="star" data-score="5"></div>
                                                                                    </div>
                                                                                    <div class="date inline pull-right">
                                                                                        12.07.2013
                                                                                    </div>
                                                                                </div> /.meta-info 
                                                                                <p class="comment-text">
                                                                                    Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis. 
                                                                                </p> /.comment-text 
                                                                            </div> /.comment-body 
                                
                                                                        </div> /.col 
                                
                                                                    </div> /.row 
                                                                </div> /.comment-item -->


                                <!--                                <div class="comment-item">
                                                                    <div class="row no-margin">
                                                                        <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                                                            <div class="avatar">
                                                                                <img alt="avatar" src="assets/images/default-avatar.jpg">
                                                                            </div> /.avatar 
                                                                        </div> /.col 
                                
                                                                        <div class="col-xs-12 col-lg-11 col-sm-10 <?php if (!$hasSidebar): ?>no-margin<?php endif; ?>">
                                                                            <div class="comment-body">
                                                                                <div class="meta-info">
                                                                                    <div class="author inline">
                                                                                        <a href="#" class="bold">John Doe</a>
                                                                                    </div>
                                                                                    <div class="star-holder inline">
                                                                                        <div class="star" data-score="3"></div>
                                                                                    </div>
                                                                                    <div class="date inline pull-right">
                                                                                        12.07.2013
                                                                                    </div>
                                                                                </div> /.meta-info 
                                                                                <p class="comment-text">
                                                                                    Integer id purus ultricies nunc tincidunt congue vitae nec felis. Vivamus sit amet nisl convallis, faucibus risus in, suscipit sapien. Vestibulum egestas interdum tellus id venenatis. 
                                                                                </p> /.comment-text 
                                                                            </div> /.comment-body 
                                
                                                                        </div> /.col 
                                
                                                                    </div> /.row 
                                                                </div> /.comment-item -->
                            </div><!-- /.comments -->

                            <div class="add-review row">
                                <div class="col-sm-8 col-xs-12">
                                    <div class="new-review-form">
                                        <h2>Add review</h2>
                                        <form id="contact-form" class="contact-form" method="post" >
                                            <div class="row field-row">
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>name*</label>
                                                    <input class="le-input" >
                                                </div>
                                                <div class="col-xs-12 col-sm-6">
                                                    <label>email*</label>
                                                    <input class="le-input" >
                                                </div>
                                            </div><!-- /.field-row -->

                                            <div class="field-row star-row">
                                                <label>your rating</label>
                                                <div class="star-holder">
                                                    <div class="star big" data-score="0"></div>
                                                </div>
                                            </div><!-- /.field-row -->

                                            <div class="field-row">
                                                <label>your review</label>
                                                <textarea rows="8" class="le-input"></textarea>
                                            </div><!-- /.field-row -->

                                            <div class="buttons-holder">
                                                <button type="submit" class="le-button huge">submit</button>
                                            </div><!-- /.buttons-holder -->
                                        </form><!-- /.contact-form -->
                                    </div><!-- /.new-review-form -->
                                </div><!-- /.col -->
                            </div><!-- /.add-review -->

                        </div><!-- /.tab-pane #reviews -->
                    </div><!-- /.tab-content -->

                </div><!-- /.tab-holder -->
            </div><!-- /.container -->
            </section><!-- /#single-product-tab -->
            <!-- ========================================= SINGLE PRODUCT TAB : END ========================================= -->

            <?php require MC_ROOT . '/parts/section/recently-viewed.php'; ?>