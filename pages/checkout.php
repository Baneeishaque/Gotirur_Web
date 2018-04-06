<!-- ========================================= CONTENT ========================================= -->

<section id="checkout-page">
    <div class="container">
        <div class="col-xs-12 no-margin">

            <div class="billing-address">
                <h2 class="border h1">billing address</h2>
                <form action="payment.php" method="GET">
                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-6">
                            <label>full name*</label>
                            <input class="le-input" name="full_name">
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <label>last name*</label>
                            <input class="le-input" name="last_name">
                        </div>
                    </div><!-- /.field-row -->

                    <!--                    <div class="row field-row">
                                            <div class="col-xs-12">
                                                <label>company name</label>
                                                <input class="le-input" >
                                            </div>
                                        </div> /.field-row -->

                    <div class="row field-row">
                        <div class="col-xs-12 col-sm-12">
                            <label>address*</label>
                            <input class="le-input" data-placeholder="street address" name="address">
                        </div>
                        <!--                        <div class="col-xs-12 col-sm-6">
                                                    <label>&nbsp;</label>
                                                    <input class="le-input" data-placeholder="town">
                                                </div>-->
                    </div><!-- /.field-row -->

                    <div class="row field-row">
                        <!--                        <div class="col-xs-12 col-sm-4">
                                                    <label>postcode / Zip*</label>
                                                    <input class="le-input"  >
                                                </div>-->
                        <div class="col-xs-12 col-sm-6">
                            <label>email address*</label>
                            <input class="le-input" name="email">
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <label>phone number*</label>
                            <input class="le-input" name="phone">
                        </div>
                    </div><!-- /.field-row -->

                    <!--                    <div class="row field-row">
                                            <div id="create-account" class="col-xs-12">
                                                <input  class="le-checkbox big" type="checkbox"  />
                                                <a class="simple-link bold" href="#">Create Account?</a> - you will receive email with temporary generated password after login you need to change it.
                                            </div>
                                        </div> /.field-row -->

            </div><!-- /.billing-address -->


<!--            <section id="shipping-address">
                <h2 class="border h1">shipping address</h2>
                <form>
                    <div class="row field-row">
                        <div class="col-xs-12">
                            <input  class="le-checkbox big" type="checkbox"  />
                            <a class="simple-link bold" href="#">ship to different address?</a>
                        </div>
                    </div> /.field-row 
                </form>
            </section> /#shipping-address -->


            <section id="your-order">
                <h2 class="border h1">your order</h2>
                <?php include_once 'checkout_cart.php' ?>;


                <!--            <div id="payment-method-options">
                                <form>
                                    <div class="payment-method-option">
                                        <input class="le-radio" type="radio" name="group2" value="Direct">
                                        <div class="radio-label bold ">Direct Bank Transfer<br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum tempus elit, vestibulum vestibulum erat ornare id.</p>
                                        </div>
                                    </div> /.payment-method-option 
                                    
                                    <div class="payment-method-option">
                                        <input class="le-radio" type="radio" name="group2" value="cheque">
                                        <div class="radio-label bold ">cheque payment</div>
                                    </div> /.payment-method-option 
                                    
                                    <div class="payment-method-option">
                                        <input class="le-radio" type="radio" name="group2" value="paypal">
                                        <div class="radio-label bold ">paypal system</div>
                                    </div> /.payment-method-option 
                                </form>
                            </div> /#payment-method-options -->

                <div class="place-order-button">
                    <input type="submit" value="Place Order" class="le-button big"/>
                </div><!-- /.place-order-button -->
                </form>
        </div><!-- /.col -->
    </div><!-- /.container -->    
</section><!-- /#checkout-page -->
<!-- ========================================= CONTENT : END ========================================= -->