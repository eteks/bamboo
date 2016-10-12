<?php include "templates/header.php"; ?>
           <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Payment Method</a>
                    </li>
                </ul>
                
            </div>
        </div>        
    
    </div>
</nav>
<!-- End class="navigation" -->

			
			<!-- Content section -->	
			<section class="main">
			
				

<!-- Checkout / Billing Address -->
<section class="checkout">


    <div class="container">
        <form enctype="multipart/form-data" action="order-review.php" method="post">
           
            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        
                        <!-- Checkout progress -->
                        <div id="checkout-progress">
                            <ul class="nav nav-tabs">
                                <li>
                                    <a href="checkout.php">
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <span>Billing address</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shipping.php">
                                        <i class="fa fa-envelope fa-lg"></i>
                                        <span>Shipping address</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="shipping-method.php">
                                        <i class="fa fa-truck fa-lg"></i>
                                        <span>Shipping method</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="payment-method.php">
                                        <i class="fa fa-money fa-lg"></i>
                                        <span>Payment method</span>
                                    </a>
                                </li>
                                <li>
                                    <div>
                                        <i class="fa fa-search fa-lg"></i>
                                        <span>Order review</span>
                                    </div>
                                </li>
                            </ul>					
                        </div>
                        <!-- End id="checkout-progress" -->
                        
                        <!-- Checkout content -->
                        <div id="checkout-content">
                            <div class="box-header">                                                                                                    
                                <h3>Payment method</h3>
                                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>                                                    
                            </div>
                            
                            
                            
                            <div class="box-content">
                                <div class="payment-methods">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="box highlight">
                                                <div class="hgroup title">
                                                    <h3>Stripe</h3>
                                                    <h5>Stripe makes it easy for developers to accept credit cards on the web.</h5>
                                                </div>

                                                <div class="box-content highlight clearfix">                                                                    
                                                    <input type="radio" value="1" name="shipping_option" id="option1" class="pull-right">
                                                </div>			
                                            </div>
                                        </div>                                                        
                                    </div>
                                </div>
                            </div>
                            
                            

                            <div class="box-footer">
                                <a href="shipping-method.php" class="btn btn-sm pull-left">
                                    <i class="fa fa-chevron-left"></i> &nbsp; Shipping method
                                </a>

                                <button type="submit" class="btn btn-primary pull-right">
                                    Order review &nbsp; <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>					
                        </div>	
                        <!-- End id="checkout-content" -->
                        
                    </div>
                </div>

                <div class="col-sm-3">                                    
                    <div class="box">
    <!-- Order totals -->
    <div id="checkout-totals">
        <div class="hgroup title">
            <h3>Order total</h3>
            <h5>Shipping costs and taxes will be calculated during checkout</h5>
        </div>
        <ul class="price-list">
            <li>Subtotal: <strong>£247.98</strong></li>
            <li>Shipping: <strong>£0.00</strong></li>
            <li>Tax: <strong>£0.00</strong></li>
            <li class="important">Total: <strong>£247.98</strong></li>
        </ul>
    </div>
    <!-- End id="checkout-totals" -->
</div>
                </div>
            </div>
        </form>
    </div>	
</section>
<!-- End class="checkout" -->
			
			</section>
			<!-- End class="main" -->
<?php include "templates/footer.php"; ?>