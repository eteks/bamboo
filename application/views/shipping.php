<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Shipping</a>
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
        <form enctype="multipart/form-data" action="shipping-method.php" method="post">
           
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
                                <li class="active">
                                    <a href="shipping.php">
                                        <i class="fa fa-envelope fa-lg"></i>
                                        <span>Shipping address</span>
                                    </a>
                                </li>
                                <li>
                                    <div>
                                        <i class="fa fa-truck fa-lg"></i>
                                        <span>Shipping method</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <i class="fa fa-money fa-lg"></i>
                                        <span>Payment method</span>
                                    </div>
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
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h3>Shipping address</h3>
                                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                                    </div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-secondary btn-xs pull-right" onclick="return false;">
                                            <i class="fa fa-copy"></i> &nbsp; Copy billing address
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="first_name" class="control-label">First name</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" value="" name="first_name" id="first_name" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name" class="control-label">Last name</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" value="" name="last_name" id="last_name" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="control-label">Email</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" value="" name="email" id="email" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="control-label">Phone</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" value="" name="phone" id="phone" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company" class="control-label">Company</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" value="" name="company" id="company" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="street_address" class="control-label">Street address</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" value="" name="street_address" id="street_address" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="city" class="control-label">Town / City</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" value="" name="city" id="city" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="zip" class="control-label">Zip / Postcode</label>
                                                    <div class="controls">
                                                        <input type="text" class="form-control" value="" name="zip" id="zip" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="country" class="control-label">Country</label>
                                                    <div class="controls">
                                                        <select class="form-control" id="country" name="country">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="state" class="control-label">State</label>
                                                    <div class="controls">
                                                        <div id="states">
                                                            <select class="form-control" id="state" name="state">                                                                                
                                                            </select>							
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>

                            <div class="box-footer">
                                <a href="checkout.php" class="btn btn-sm pull-left">
                                    <i class="fa fa-chevron-left"></i> &nbsp; Billing address
                                </a>

                                <button type="submit" class="btn btn-primary pull-right">
                                    Shipping method &nbsp; <i class="fa fa-chevron-right"></i>
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