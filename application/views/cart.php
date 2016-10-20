<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Cart</a>
                    </li>
                </ul>
                
            </div>
        </div>        
    
    </div>
</nav>
<!-- End class="navigation" -->

			
			<!-- Content section -->	
			<section class="main">
			
				

<!-- Cart container -->
<section class="cart">



    <div class="container">
        <div class="row">

            <div class="col-sm-9">
                
                <!-- Cart -->
                <div class="box" style="display:none">
                    <form enctype="multipart/form-data" action="checkout-start.php" method="post" >
                        
                        <div class="box-header">
                            <h3>Shopping cart</h3>
                            <h5>You currently have <strong>3</strong> item(s) in your cart</h5>
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
                                                <input type="text" name="item_quantity[]" value="2" />
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
                                                <input type="text" name="item_quantity[]" value="1" />
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

                        <div class="box-footer cart-footer">
                            <a href="index.php" class="btn btn-sm pull-left">
                                <i class="fa fa-chevron-left"></i> &nbsp; Continue shopping
                            </a>			
							<div class="pull-right">
                                <button type="submit" class="btn btn-sm">
                                    <i class="fa fa-undo"></i> &nbsp; Update cart
                                </button>

                                <button type="submit" name="checkout" value="1" class="btn btn-primary btn-sm">
                                    Proceed to checkout &nbsp; <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>			
                </div>
                <!-- End Cart -->

                <!-- Shipping estimator -->
                <div class="box">
                    <form enctype="multipart/form-data" action="#" method="post" onsubmit="return false;">

                        <div class="box-header">
                            <h3>Shipping estimator</h3>
                            <h5>Get an estimated shipping cost for your order</h5>
                        </div>

                        <div class="box-content">
                            <div class="row">

                                <div class="col-sm-4">
                                    <label for="country">Country</label>
                                    <select class="form-control" id="country" name="country">
                                        <option value="3" >Australia</option>
                                        <option value="2" >Canada</option>
                                        <option value="17" selected="selected">United Kingdom</option>
                                        <option value="1" >United States</option>
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label for="state">State</label>
                                    <div id="shipping_states">
                                        <select class="form-control" id="state" name="state">
                                            
                                        </select>				
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label>ZIP</label>
                                    <input class="form-control zip" type="text" name="zip" value=""/>
                                </div>

                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="button" class="btn btn-sm" data-toggle="modal" data-target="#shipping">Estimate shipping cost</button>
                        </div>
                    </form>
                </div>                                
                <!-- End Shipping estimator -->

                <!-- Shipping modal -->
                <div id="shipping" class="modal fade" tabindex="-1">
	                <div class="modal-dialog">
						<div class="modal-content">
		                    <div class="modal-header">
		                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		                        <div class="hgroup title">
		                            <h3>Shipping estimator</h3>
		                            <h5>Get an estimated shipping cost for your order</h5>
		                        </div>
		                    </div>
		
		                    <div class="modal-body">
		                        <div id="shipping_options">
		                            <table class="table table-striped table-bordered">                                         
		                                <tr>
		                                    <th>Name</th>
		                                    <th>Description</th>
		                                    <th>Price</th>
		                                </tr>
		                                <tr>
		                                    <td>Free shipping</td>
		                                    <td>Delivered to your letterbox within 7-14 working days</td>
		                                    <td>£0.00</td>
		                                </tr>
		                                <tr>
		                                    <td>Standard</td>
		                                    <td>Delivered to your letterbox within 5 working days</td>
		                                    <td>£4.95</td>
		                                </tr>
		                                <tr>
		                                    <td>Speedy</td>
		                                    <td>Delivered to your letterbox within 3 working days</td>
		                                    <td>£8.95</td>
		                                </tr>                                                
		                            </table>
		                            
		                        </div>
		                    </div>
		
		                    <div class="modal-footer">
	                            <a href="<?php echo base_url(); ?>checkout/" class="btn btn-primary btn-sm btn-block-xs pull-right">
	                                Proceed to checkout &nbsp; <i class="fa fa-chevron-right"></i>
	                            </a>
		                    </div>
		                </div>
	                </div>
                </div>
                <!-- End Shipping modal -->
                
            </div>

            <div class="col-sm-3">
                
                <!-- Cart details -->
                <div class="cart-details">
                    <div class="box">
                        <div class="hgroup title">
                            <h3>Order totals</h3>
                            <h5>Shipping costs and taxes will be evaluated during checkout</h5>
                        </div>

                        <ul class="price-list">
                            <li>Subtotal: <strong>£247.98</strong></li>
                            <li class="important">Total: <strong>£247.98</strong></li>
                        </ul>
                    </div>
                </div>
                <!-- End class="cart-details" -->
                
                <!-- Coupon -->
                <div class="coupon">
                    <div class="box">
                        <div class="hgroup title">
                            <h3>Coupon code</h3>
                            <h5>Enter your coupon here to redeem</h5>
                        </div>

                        <form enctype="multipart/form-data" action="#" method="post" onsubmit="return false;">
                            
                            <label for="coupon_code">Coupon code</label>
                            <div class="input-group">
                                <input id="coupon_code" value="" type="text" name="coupon" class="form-control" />
                                <span class="input-group-addon btn" type="submit" >
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>

                        </form>				
                    </div>
                </div>
                <!-- End class="coupon" -->
                
            </div>

        </div>
    </div>	
</section>         
<!-- End Cart container -->
			
			</section>
			<!-- End class="main" -->
			
<?php include "templates/footer.php"; ?>