<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Order Review</a>
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
        <form onsubmit="return false;" enctype="multipart/form-data" action="#" method="post">
           
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
                                <li>
                                    <a href="payment-method.php">
                                        <i class="fa fa-money fa-lg"></i>
                                        <span>Payment method</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="order-review.php">
                                        <i class="fa fa-search fa-lg"></i>
                                        <span>Order review</span>
                                    </a>
                                </li>
                            </ul>					
                        </div>
                        <!-- End id="checkout-progress" -->
                        
                        <!-- Checkout content -->
                        <div id="checkout-content">
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