<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="<?php echo base_url(); ?>home/">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Checkout</a>
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
        <form enctype="multipart/form-data" action="" method="">
           
            <div class="row">
                <div class="col-sm-9">
                    <div class="box">
                        
                     <!--checkout tab box-->   
                      <div id="checkout-tabs">
                      	                        
                        <!-- Checkout progress -->
                        <div id="checkout-progress">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab-1">
                                        <i class="fa fa-map-marker fa-lg"></i>
                                        <span>Billing address</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-2">
                                        <i class="fa fa-envelope fa-lg"></i>
                                        <span>Shipping address</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-3">
                                        <i class="fa fa-truck fa-lg"></i>
                                        <span>Shipping method</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-4">
                                        <i class="fa fa-money fa-lg"></i>
                                        <span>Payment method</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab-5">
                                        <i class="fa fa-search fa-lg"></i>
                                        <span>Order review</span>
                                    </a>
                                </li>
                            </ul>					
                        </div>
                        <!-- End id="checkout-progress" -->
                        
                        <!-- Checkout content -->
                        
                        <div id="checkout-content" class="tab">
                        	
                          <!--start #tab1-->	
                          <div id="tab-1" class="tab-content">	
                            <div class="box-header">
                                <h3>Billing address</h3>
                                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
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
                            </div><!--box content-->

                            <div class="box-footer">
                                <a href="<?php echo base_url(); ?>basket/" class="btn btn-sm pull-left">
                                    <i class="fa fa-chevron-left"></i> &nbsp; Back to cart
                                </a>

                                <a href="#tab2" class="btn btn-primary pull-right next-tab">
                                    Shipping address &nbsp; <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>	
                          </div> <!--end #tab1--> 
                           
                          <!--start #tab2 --> 
                          <div id="tab-2" class="tab-content">	
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

                                <a href="#tab2" class="btn btn-primary pull-right next-tab">
                                    Shipping method &nbsp; <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>	
                           </div> <!--end #tab2--> 	
                           
                           <!--start #tab3 -->
                           <div id="tab-3" class="tab-content">
                           	  <div class="box-header">                                                                                                    
                                <h3>Shipping method</h3>
                                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>                                                    
                            </div>
                             
                            <div class="box-content">
                                <div class="shipping-methods">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="box highlight">
                                                <div class="hgroup title">
                                                    <h3>Free shipping</h3>
                                                    <h5>Delivered to your letterbox within 7-14 working days</h5>
                                                </div>

                                                <div class="box-content highlight clearfix">
                                                    <div class="price pull-left">
                                                        <strong>FREE!</strong>
                                                    </div>

                                                    <input type="radio" value="1" name="shipping_option" id="option1" class="pull-right">
                                                </div>			
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="box highlight">
                                                <div class="hgroup title">
                                                    <h3>Standard</h3>
                                                    <h5>Delivered to your letterbox within 5 working days</h5>
                                                </div>

                                                <div class="box-content highlight clearfix">
                                                    <div class="price pull-left">
                                                        <strong>£4.95</strong>
                                                    </div>

                                                    <input type="radio" value="2" name="shipping_option" id="option2" class="pull-right">
                                                </div>			
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="box highlight">
                                                <div class="hgroup title">
                                                    <h3>Speedy</h3>
                                                    <h5>Delivered to your letterbox within 3 working days</h5>
                                                </div>

                                                <div class="box-content highlight clearfix">
                                                    <div class="price pull-left">
                                                        <strong>£8.95</strong>
                                                    </div>

                                                    <input type="radio" value="3" name="shipping_option" id="option3" class="pull-right">
                                                </div>			
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="box-footer">
                                <a href="shipping.php" class="btn btn-sm pull-left">
                                    <i class="fa fa-chevron-left"></i> &nbsp; Shipping address
                                </a>

                                <button type="submit" class="btn btn-primary pull-right">
                                    Payment method &nbsp; <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                           </div><!--end #tab3--> 
                           
                           <!--start #tab4 -->
                           <div id="tab-4" class="tab-content">
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
                           </div><!--end #tab4-->
                           
                           <!--start #tab5 -->
                           <div id="tab-5" class="tab-content">
                           	 <div class="box-header">                                                                                                    
                                <h3>Order review</h3>
                                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>                                                    
                            </div>
                            
                            <div class="box-content">
                                <div class="cart-items">
                                    <table class="styled-table">
                                        <thead>
                                            <tr>
                                                <th class="col_product text-left">Product</th>
                                                <th class="col_remove text-right">&nbsp;</th>
                                                <th class="col_qty text-right">Qty</th>
                                                <th class="col_single text-right">Single</th>
                                                <th class="col_discount text-right">Discount</th>
                                                <th class="col_total text-right">Total</th>
                                            </tr>
                                        </thead>
    
                                        <tbody>									
                                            <tr>
                                                <td data-title="Product" class="col_product text-left">
                                                    <div class="image visible-lg">
                                                        <a href="product.php">
                                                            <img src="img/thumbnails/db_file_img_230_60xauto.jpg" alt="Helen Romper">
                                                        </a>
                                                    </div>
    
                                                    <h5>
                                                        <a href="product.php">Helen Romper</a>
                                                    </h5>
    
                                                </td>
    
                                                <td data-title="Remove" class="col_remove text-right">
                                                    <a href="#">
                                                        <i class="fa fa-trash fa-lg"></i>
                                                    </a>
                                                </td>
    
                                                <td data-title="Qty" class="col_qty text-right">
                                                    <span class="quantity">2</span>
                                                </td>
    
                                                <td data-title="Single" class="col_single text-right">
                                                    <span class="single-price">£43.99</span>
                                                </td>
    
                                                <td data-title="Discount" class="col_discount text-right">
                                                    <span class="discount">£0.00</span>
                                                </td>
    
                                                <td data-title="Total" class="col_total text-right">
                                                    <span class="total-price">£87.98</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-title="Product" class="col_product text-left">
                                                    <div class="image visible-lg">
                                                        <a href="product.php">
                                                            <img src="img/thumbnails/db_file_img_17_60xauto.jpg" alt="1300 in Grey">
                                                        </a>
                                                    </div>
                                                    <h5>
                                                        <a href="product.php">1300 in Grey</a>
                                                    </h5>
                                                    <ul class="options">
                                                        <li>Size: UK 9</li>
                                                        <li>Color: Gray</li>
                                                    </ul>
                                                </td>
    
                                                <td data-title="Remove" class="col_remove text-right">
                                                    <a href="#">
                                                        <i class="fa fa-trash fa-lg"></i>
                                                    </a>
                                                </td>
    
                                                <td data-title="Qty" class="col_qty text-right">
                                                    <span class="quantity">2</span>
                                                </td>
    
                                                <td data-title="Single" class="col_single text-right">
                                                    <span class="single-price">£160.00</span>
                                                </td>
    
                                                <td data-title="Discount" class="col_discount text-right">
                                                    <span class="discount">£0.00</span>
                                                </td>
    
                                                <td data-title="Total" class="col_total text-right">
                                                    <span class="total-price">£160.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
 
                            <div class="box-footer">
                                <a href="payment-method.php" class="btn btn-sm pull-left">
                                    <i class="fa fa-chevron-left"></i> &nbsp; Payment method
                                </a>

                                <button type="submit" class="btn btn-primary pull-right">
                                    Create order and pay &nbsp; <i class="fa fa-check"></i>
                                </button>
                            </div>
                           </div><!--end #tab5-->
                           				
                        </div>	
                        <!-- End id="checkout-content" -->
                     </div>
                     <!--End #checkout tabs-->   
                        
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