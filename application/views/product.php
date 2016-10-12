<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Product</a>
                    </li>
                </ul>
                
            </div>
        </div>        
    
    </div>
</nav>
<!-- End class="navigation" -->

			
			<!-- Content section -->	
			<section class="main">
			
				

<!-- Product content -->
<section class="product">

    <!-- Product info -->
    <section class="product-info">
        <div class="container">
            <div class="row">

                <div class="col-sm-4">
                    <div class="product-images">
                        <div class="box">
                            <div class="primary">
                                <img src="img/thumbnails/db_file_img_228_480xauto.jpg" data-zoom-image="img/thumbnails/db_file_img_228_640xauto.jpg" alt="Chaser Overalls" />
                            </div>

                            <div class="thumbs" id="gallery">
                                <ul class="thumbs-list">
                                    <li>
                                        <a class="active" href="#" data-image="img/thumbnails/db_file_img_228_480xauto.jpg" title="Chaser Overalls" data-zoom-image="img/thumbnails/db_file_img_228_640xauto.jpg">
                                            <img src="img/thumbnails/db_file_img_228_160xauto.jpg" alt="Chaser Overalls" />
                                        </a>
                                    </li>
                                    <li>
                                        <a  href="#" data-image="img/thumbnails/db_file_img_229_480xauto.jpg" title="Chaser Overalls" data-zoom-image="img/thumbnails/db_file_img_229_640xauto.jpg">
                                            <img src="img/thumbnails/db_file_img_229_160xauto.jpg" alt="Chaser Overalls" />
                                        </a>
                                    </li>
                                    <li>
                                        <a  href="#" data-image="img/thumbnails/db_file_img_227_480xauto.jpg" title="Chaser Overalls" data-zoom-image="img/thumbnails/db_file_img_227_640xauto.jpg">
                                            <img src="img/thumbnails/db_file_img_227_160xauto.jpg" alt="Chaser Overalls" />
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="social">
                                <div id="sharrre">
                                    <div class="facebook"> </div>
                                    <div class="twitter"> </div>
                                    <div class="pinterest"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    
                    <!-- Product content -->
                    <div class="product-content">
                        <div class="box">

                            <!-- Tab panels' navigation -->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#product" data-toggle="tab">
                                        <i class="fa fa-reorder fa-lg"></i>
                                        <span class="hidden-xs">Product</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#description" data-toggle="tab">
                                        <i class="fa fa-info-circle fa-lg"></i>
                                        <span class="hidden-xs">Info</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#shipping" data-toggle="tab">
                                        <i class="fa fa-truck fa-lg"></i>
                                        <span class="hidden-xs">Shipping</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#returns" data-toggle="tab">
                                        <i class="fa fa-undo fa-lg"></i>
                                        <span class="hidden-xs">Returns</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#ratings" data-toggle="tab">
                                        <i class="fa fa-heart fa-lg"></i>
                                        <span class="hidden-xs">Ratings</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Tab panels' navigation -->
                            

                            <!-- Tab panels container -->
                            
                            <div class="tab-content">
                                
                                <!-- Product tab -->
                                <div class="tab-pane active" id="product">
                                    <form enctype="multipart/form-data" action="#" onsubmit="return false;" method="post">
                                        
                                        <div class="details">
                                            <h1>Chaser Overalls</h1>
                                            <div class="prices"><span class="price">£92.00</span></div>

                                            <div class="meta">
                                                <div class="sku">
                                                    <i class="fa fa-pencil"></i>
                                                    <span rel="tooltip" title="SKU is 0092">0092</span>
                                                </div>

                                                <div class="categories">
                                                    <span><i class="fa fa-tags"></i><a href="category.php" title="Dresses">Dresses</a></span>, <a href="category.php" title="Womens">Womens</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="short-description">
                                            <p>Vintage-style faux leather short overalls. Long adjustable straps with brass detailing, exposed zip at back, and side slant pockets with single rear welt pocket.</p>
                                        </div>
                                        
                                        <div class="options">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">

                                                        <label for="product_options" class="control-label">Leather</label>
                                                        <div class="controls">
                                                            <select id="product_options" name="product_options[]" class="form-control">
                                                                <option value="Brown">Brown</option>
                                                                <option value="Black" selected="selected">Black</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="add-to-cart">
                                            <button class="btn btn-primary btn-lg btn-block-xs" data-toggle="modal" data-target="#added">
                                                <i class="fa fa-plus"></i> &nbsp; Add to cart
                                            </button>
                                        </div>
                                    </form>						
                                </div>
                                <!-- End id="product" -->
                                
                                <!-- Description tab -->
                                <div class="tab-pane" id="description">
                                    <p><span>Vintage-style faux leather short overalls. Long adjustable straps with brass detailing, exposed zip at back, and side slant pockets with single rear welt pocket.</span><br /><br />
                                        <span>100% Polyester</span>
                                    </p>						
                                </div>
                                <!-- End id="description" -->

                                <!-- Shipping tab -->
                                <div class="tab-pane" id="shipping">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                    <p><img class="img-thumbnail" src="http://www.tfingi.com/repo/royal-mail.png" alt="" /><img class="img-thumbnail" src="http://www.tfingi.com/repo/ups-logo.png" alt="" /></p>
                                    <p>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    <h6><em class="fa fa-gift"></em> Giftwrap?</h6>
                                    <p>Let us take care of giftwrapping your presents by selecting <strong>Giftwrap</strong> in the order process. Eligible items can be giftwrapped for as little as &pound;0.99, and larger items may be presented in gift bags.</p>						
                                </div>
                                <!-- End id="shipping" -->

                                <!-- Returns tab -->
                                <div class="tab-pane" id="returns">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    <p class="lead">For any unwanted goods La Boutique offers a <strong>21-day return policy</strong>.</p>
                                    <p>If you receive items from us that differ from what you have ordered, then you must notify us as soon as possible using our <a href="#">online contact form</a>.</p>
                                    <p>If you find that your items are faulty or damaged on arrival, then you are entitled to a repair, replacement or a refund. Please note that for some goods it may be disproportionately costly to repair, and so where this is the case, then we will give you a replacement or a refund.</p>
                                    <p>Please visit our <a href="#">Warranty section</a> for more details.</p>						
                                </div>
                                <!-- End id="returns" -->

                                
                                <!-- Ratings tab -->
                                <div class="tab-pane" id="ratings">
                                    <div class="ratings-items">

                                        <article class="rating-item">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <h5>Shaped for crush</h5>
                                                    <p>I hope they release some more colours of this dress. It feels great and looks sexier.<br>
                                                        <br>
                                                        I love it!</p>
                                                </div>

                                                <div class="col-sm-3">
                                                    <img src="img/thumbnails/avatar.png" class="gravatar" alt="" />
                                                    <h6>Sam Ritora</h6>
                                                    <small>08/30/2013</small>
                                                    <div  class="rating rating-5">
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart"></i>
                                                        <i class="fa fa-heart"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>


                                        <hr>
                                    </div>

                                    <div class="well">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h6><i class="fa fa-comment-o"></i> &nbsp; Share your opinion!</h6>
                                                <p>Let other people know your thoughts on this product!</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <button class="btn btn-seconary btn-block" data-toggle="modal" data-target="#review_form">Rate this product</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Review modal window -->
                                    <div id="review_form" class="modal fade" tabindex="-1" role="dialog">
                                    	<div class="modal-dialog">
                                    	    <div class="modal-content">
                                    	    
		                                        <form onsubmit="return false;" enctype="multipart/form-data" action="#" method="post">
		
		                                            <input type="hidden" name="ls_session_key" value="lsk52286509c22077.63404603"/>		
		                                            <div class="modal-header">
		                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		                                                <div class="hgroup title">
		                                                    <h3>Modal header</h3>
		                                                    <h5>Modal header</h5>
		                                                </div>
		                                            </div>
		
		                                            <div class="modal-body">
		                                                <div class="row">
		                                                    <div class="col-sm-6">
		                                                        <div class="form-group">
		                                                            <label class="control-label">Rating</label>
		                                                            <div class="controls">
		                                                                <select  class="form-control" name="rate">
		                                                                    <option value="1">1</option>
		                                                                    <option value="2">2</option>
		                                                                    <option value="3">3</option>
		                                                                    <option value="4">4</option>
		                                                                    <option value="5">5</option>
		                                                                </select>
		                                                            </div>
		                                                        </div>
		                                                    </div>
		
		                                                    <div class="col-sm-6">
		                                                        <div class="form-group">
		                                                            <label for="review_title" class="control-label">Review title</label>
		                                                            <div class="controls">
		                                                                <input class="form-control" id="review_title" name="review_title" type="text"/>
		                                                            </div>
		                                                        </div>
		                                                    </div>
		                                                </div>
		
		                                                <div class="row">
		                                                    <div class="col-sm-6">
		                                                        <div class="form-group">
		                                                            <label for="review_author_name" class="control-label">Your name</label>
		                                                            <div class="controls">
		                                                                <input class="form-control" id="review_author_name" name="review_author_name" type="text" value=""/>
		                                                            </div>
		                                                        </div>
		                                                    </div>
		
		                                                    <div class="col-sm-6">
		                                                        <div class="form-group">
		                                                            <label for="review_author_email" class="control-label">Your email</label>
		                                                            <div class="controls">
		                                                                <input class="form-control" id="review_author_email" name="review_author_email" type="text" value="" />
		                                                            </div>
		                                                        </div>
		                                                    </div>
		                                                </div>
		
		                                                <div class="row">
		                                                    <div class="col-sm-12">
		                                                        <div class="form-group">
		                                                            <label for="review_text" class="control-label">Review</label>
		                                                            <div class="controls">
		                                                                <textarea class="form-control" id="review_text" name="review_text"></textarea>
		                                                            </div>
		                                                        </div>
		
		                                                    </div>
		                                                </div>
		
		                                            </div>
		
		                                            <div class="modal-footer">
		                                                <button class="btn btn-primary btn-block-xs pull-right" type="submit">Submit product review</button>
		                                            </div>
		                                        </form>
                                        
                                        	</div>
                                        </div>
                                    </div>
                                    
                                    <!-- End id="review_form" -->

                                </div>
                                <!-- End id="ratings" -->
                                
                                
                            </div>                                            
                            <!-- End tab panels container -->
                            
                        </div>
                        
                    </div>                                    
                    <!-- End class="product-content" -->
                    
                </div>


            </div>
        </div>
    </section>
    <!-- End class="product-info" -->

    <!-- Product Reviews -->
    <!-- <section class="product-reviews">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">
                <h5>Tell us why you <span class="script">love&#10084;</span> this product</h5>

                Facebook comments
                <div id="fb-root"></div>
                <script>                            
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=460821237293986";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <div class="fb-comments" data-width="730" data-href="http://la-boutique.twindots.com/product/chaser-overalls" data-num-posts="10"></div>
                
                
            </div>
        </div>		
    </section> -->
    <!-- End class="product-reviews" -->
    
    <!-- Related products -->
    <section class="product-related">
        <div class="container">
            <div class="col-sm-12">

                <h5>Can't find what you're looking for? Why not try these&hellip;</h5>

                <ul class="product-list isotope">
                    <li class="standard" data-price="160">
                        <a href="product.php" title="1300 in Grey">

                            <div class="image">
                                <img class="primary" src="img/thumbnails/db_file_img_48_640xauto.jpg" alt="Lisette Dress" />
                                <img class="secondary" src="img/thumbnails/db_file_img_49_640xauto.jpg" alt="Lisette Dress" />

                            </div>

                            <div class="title">
                                <div class="prices"><span class="price">£160.00</span></div>
                                <h3>1300 in Grey</h3>

                            </div>

                        </a>
                    </li>
                    <li class="standard" data-price="75">
                        <a href="product.php" title="574 In Navy">

                            <div class="image">
                                <img class="primary" src="img/thumbnails/db_file_img_32_640xauto.jpg" alt="El Silencio" />
                                <img class="secondary" src="img/thumbnails/db_file_img_33_640xauto.jpg" alt="El Silencio" />

                            </div>

                            <div class="title">
                                <div class="prices"><span class="price">£75.00</span></div>
                                <h3>574 In Navy</h3>

                            </div>

                        </a>
                    </li>
                    <li class="standard" data-price="70">
                        <a href="product.php" title="574 In Red">

                            <div class="image">
                                <img class="primary" src="img/thumbnails/db_file_img_137_640xauto.jpg" alt="" />
                                <img class="secondary" src="img/thumbnails/db_file_img_138_640xauto.jpg" alt="" />

                            </div>

                            <div class="title">
                                <div class="prices"><span class="price">£70.00</span></div>
                                <h3>574 In Red</h3>

                            </div>

                        </a>
                    </li>
                </ul>
            </div>
        </div>	
    </section>                    
    <!-- End class="products-related" -->

    <!-- Added to cart modal window -->
    <div id="added" class="modal fade" tabindex="-1">
    	<div class="modal-dialog">
    	    <div class="modal-content">
		        <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            <div class="hgroup title">
		                <h3>You're one step closer to owning this product!</h3>
		                <h5>"Chaser Overalls" has been added to your cart</h5>
		            </div>
		        </div>
		        <div class="modal-footer">	
	                <a href="cart.php" class="btn btn-primary btn-sm btn-block-xs">
	                    Go to cart &nbsp; <i class="fa fa-chevron-right"></i>
	                </a>
		        </div>
			</div>
		</div>
    </div>
    <!-- End id="added" -->

</section>
<!-- End class="product-info" -->
			
			</section>
			<!-- End class="main" -->
			
<?php include "templates/footer.php"; ?>