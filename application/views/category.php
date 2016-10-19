<?php if(!$this->input->is_ajax_request()){ ?>
<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="active">
                        <a href="#"><?php echo $cat_name->category_name; ?></a>
                    </li>
                </ul>
                
            </div>
        </div>        
    
    </div>
</nav>
<!-- End class="navigation" -->

			
<!-- Content section -->	
<section class="main">
			
				

<!-- Category content -->
<section class="category">

    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                
                <!-- Sidebar -->
                <aside class="sidebar">

                    <div class="children">
                        <div class="box border-top">

                            <div class="hgroup title">
                                <h3>Categories</h3>
                            </div>
                            
                            <div class="category-list list-group">
                             <ul class="category_menu">
                             	<li class="">		
	                                <a href="<?php echo base_url(); ?>category/<?php echo $cat_name->category_id; ?>" class="list-group-item active" title="count">
	                                    <span class="badge"><?php echo $cat_pro_count; ?></span>
	                                    <?php echo $cat_name->category_name; ?> 				
	                                </a>
	                                <ul class="subcategory_menu">
                                       <?php foreach ($gift_subcategory as $subcat):?>
                                          <li>
                                            <a  class="subcategories" data-id="<?php echo $subcat['subcategory_id'] ?>"><?php echo $subcat['subcategory_name'] ?></a>
                                         </li>
                                       <?php endforeach; ?> 
                                   </ul>
                                </li>   
                                <!-- <a href="category.php" class="list-group-item active" title="Dresses">
                                    <span class="badge">11</span>
                                    Dresses				
                                </a>
                                <a href="category.php" class="list-group-item" title="Bags">
                                    <span class="badge">2</span>
                                    Bags				
                                </a>
                                <a href="category.php" class="list-group-item" title="Trousers">
                                    <span class="badge">7</span>
                                    Trousers				
                                </a>
                                <a href="category.php" class="list-group-item" title="Tops">
                                    <span class="badge">8</span>
                                    Tops				
                                </a>
                                <a href="category.php" class="list-group-item" title="Accessories">
                                    <span class="badge">0</span>
                                    Accessories				
                                </a> -->
                              </ul>  
                            </div>
                        </div>
                    </div>

                    <!-- Price filter -->
                    <div class="price-filter">
                        <div class="box border-top">
                            <div class="hgroup title">
                                <h3>Refine products</h3>
                                <h5>Filter your products by price</h5>
                            </div>

                            <div id="slider" data-max="6000" data-step="5" data-currency="&pound;"> </div>
                            <span id="slider-label">Price range: <strong>£0 &ndash; £4000</strong></span>
                        </div>
                    </div>
                    <!-- End class="price-filter" -->
                    
                    <!--View by recipient-->
                    <div class="children">
                        <div class="box border-top">

                            <div class="hgroup title">
                                <h3>Recipient</h3>
                            </div>
                            
                            <div class="category-list list-group">
                             <ul class="recipient_menu">
                             	<!-- <li>
                                   <a class="recipients" data-id="0"> All </a> 
                                </li> -->
                                <?php foreach ($gift_recipient as $recipient): ?>	
	                             	<li class="recipients_list">	
	                             	   <a class="list-group-item recipients" data-id="<?php echo $recipient['recipient_id']; ?>"><?php echo $recipient['recipient_type']; ?></a> 
			                        </li>
		                         <?php endforeach; ?>   
                              </ul>  
                            </div>
                        </div>
                    </div>
                    <!---end of recipient--> 


                    <!-- Latest reviews -->
                    <!-- <div class="widget LatestProductReviews">
                        <h3 class="widget-title widget-title ">Latest product reviews</h3>
                        <ul class="ratings-small">
                            <li>
                                <div class="image">
                                    <a title="View product" href="product.php">
                                        <img class="gravatar" src="img/thumbnails/avatar.png" alt="" />
                                    </a>
                                </div>

                                <div class="desc">
                                    <h6>Ebay seller</h6>
                                    <small>08/30/2013</small>
                                    <div class="rating rating-3">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <a title="View product" href="product.php">
                                        <img class="gravatar" src="img/thumbnails/avatar.png" alt="" />
                                    </a>
                                </div>

                                <div class="desc">
                                    <h6>Victoria Spince</h6>
                                    <small>08/30/2013</small>
                                    <div class="rating rating-1">
                                         <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="image">
                                    <a title="View product" href="product.php">
                                        <img class="gravatar" src="img/thumbnails/avatar.png" alt="" />
                                    </a>
                                </div>

                                <div class="desc">
                                    <h6>Becca</h6>
                                    <small>08/30/2013</small>
                                    <div class="rating rating-4">
                                         <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </li>                                            
                        </ul>
                    </div> -->
                    <!-- end class="widget LatestProductReviews" -->
                    
                    <!-- Latest Products -->
                    <!-- <div class="widget LatestProducts">
                        <h3 class="widget-title widget-title ">What's new</h3>
                        <ul class="product-list-small">
                            <li>			
                                <div class="image">
                                    <a href="product.php" title="Lolita">
                                        <img src="img/thumbnails/db_file_img_269_160xauto.jpg" alt="Lolita" />
                                    </a>
                                </div>

                                <div class="desc">
                                    <h6>
                                        <a href="product.php" title="Lolita">Lolita</a>
                                    </h6>

                                    <div class="price">
                                        £88.00										
                                    </div>

                                    <div class="rating rating-4">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </li>
                            <li>			
                                <div class="image">
                                    <a href="product.php" title="Mars">
                                        <img src="img/thumbnails/db_file_img_265_160xauto.jpg" alt="Mars" />
                                    </a>
                                </div>

                                <div class="desc">
                                    <h6>
                                        <a href="product.php" title="Mars">Mars</a>
                                    </h6>

                                    <div class="price">
                                        £398.00										
                                    </div>

                                    <div class="rating rating-0">
                                        <a href="#">No reviews &mdash; be the first?</a>
                                    </div>
                                </div>
                            </li>
                            <li>			
                                <div class="image">
                                    <a href="product.php" title="Anna Lace">
                                        <img src="img/thumbnails/db_file_img_261_160xauto.jpg" alt="Anna Lace" />
                                    </a>
                                </div>

                                <div class="desc">
                                    <h6>
                                        <a href="product.php" title="Anna Lace">Anna Lace</a>
                                    </h6>

                                    <div class="price">
                                        £38.00										
                                    </div>

                                    <div class="rating rating-4">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </li>                                            
                        </ul>
                    </div> -->
                    <!-- End class="widget LatestProducts" -->
                    
                    <!-- Adverts -->
                    <!-- <div class="widget Partial">
                        <h3 class="widget-title widget-title ">New for Summer 2014</h3>
                        <ul class="adverts">
                            <li>
                                <a href="#" class="advert">
                                    <img src="img/adverts/advert-1.jpg" alt="" />
                                </a>
                            </li>

                            <li>
                                <a href="#" class="advert">
                                    <img src="img/adverts/advert-2.jpg" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- End class="widget Partial" -->
                    
                    <!-- Products on Sale -->
                    <!-- <div class="widget Productsonsale">
                        <h3 class="widget-title widget-title ">Special offers</h3>
                        <ul class="product-list-small">
                            <li>			
                                <div class="image">
                                    <a href="product.php" title="Dip Dye Panel Henley">
                                        <img src="img/thumbnails/db_file_img_57_160xauto.jpg" alt="Dip Dye Panel Henley" />
                                    </a>
                                </div>
                                <div class="desc">
                                    <h6>
                                        <a href="product.php" title="Dip Dye Panel Henley">Dip Dye Panel Henley</a>
                                    </h6>

                                    <div class="price">
                                        £48.00						
                                        <del style="font-size: 10px;">£60.00</del> 
                                        <span class="label label-sale">Sale</span>
                                    </div>

                                    <div class="rating rating-4.5">
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                </div>
                            </li>
                            <li>			
                                <div class="image">
                                    <a href="product.php" title="Amelia Tote">
                                        <img src="img/thumbnails/db_file_img_44_160xauto.jpg" alt="Amelia Tote" />
                                    </a>
                                </div>

                                <div class="desc">
                                    <h6>
                                        <a href="product.php" title="Amelia Tote">Amelia Tote</a>
                                    </h6>

                                    <div class="price">
                                        £48.00						
                                        <del style="font-size: 10px;">£58.00</del> 
                                        <span class="label label-sale">Sale</span>
                                    </div>

                                    <div class="rating rating-0">
                                        <a href="#">No reviews &mdash; be the first?</a>
                                    </div>
                                </div>
                            </li>
                            <li>			
                                <div class="image">
                                    <a href="product.php" title="Navy Polka Dot SS BD">
                                        <img src="img/thumbnails/db_file_img_175_160xauto.jpg" alt="Navy Polka Dot SS BD" />
                                    </a>
                                </div>

                                <div class="desc">
                                    <h6>
                                        <a href="product.php" title="Navy Polka Dot SS BD">Navy Polka Dot SS BD</a>
                                    </h6>

                                    <div class="price">
                                        £131.99						
                                        <del style="font-size: 10px;">£175.00</del> 
                                        <span class="label label-sale">Sale</span>

                                    </div>

                                    <div class="rating rating-0">
                                        <a href="#">No reviews &mdash; be the first?</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <!-- End  class="widget Productsonsale" -->
                    
                    <!-- TopSellingProducts -->
					<!-- <div class="widget TopSellingProducts">
					    <h3 class="widget-title widget-title ">Top selling products</h3>
					    <ul class="product-list-small">
					        <li>			
					            <div class="image">
					                <a href="product.php" title="El Silencio">
					                    <img src="img/thumbnails/db_file_img_32_160xauto.jpg" alt="El Silencio" />
					                </a>
					            </div>
					
					            <div class="desc">
					                <h6>
					                    <a href="product.php" title="El Silencio">El Silencio</a>
					                </h6>
					
					                <div class="price">
					                    £55.00										
					                </div>
					
					                 <div class="rating rating-3">
					                    <i class="fa fa-heart"></i>
					                    <i class="fa fa-heart"></i>
					                    <i class="fa fa-heart"></i>
					                </div>
					            </div>
					        </li>
					        <li>			
					            <div class="image">
					                <a href="product.php" title="Lisette Dress">
					                    <img src="img/thumbnails/db_file_img_48_160xauto.jpg" alt="Lisette Dress" />
					                </a>
					            </div>
					
					            <div class="desc">
					                <h6>
					                    <a href="product.php" title="Lisette Dress">Lisette Dress</a>
					                </h6>
					
					                <div class="price">
					                    £58.00										
					                </div>
					
					                <div class="rating rating-0">
					                    <a href="#">No reviews &mdash; be the first?</a>
					                </div>
					            </div>
					        </li>
					        <li>			
					            <div class="image">
					                <a href="product.php" title="Dustbowl Snapback">
					                    <img src="img/thumbnails/db_file_img_34_160xauto.jpg" alt="Dustbowl Snapback" />
					                </a>
					            </div>
					
					            <div class="desc">
					                <h6>
					                    <a href="product.php" title="Dustbowl Snapback">Dustbowl Snapback</a>
					                </h6>
					
					                <div class="price">
					                    £28.00										
					                </div>
					
					                <div class="rating rating-0">
					                    <a href="#">No reviews &mdash; be the first?</a>
					                </div>
					            </div>
					        </li>
					    </ul>
					</div> -->
                    <!-- End  class="widget TopSellingProducts" -->									
                    
                    <!-- This month only! widget -->
					<!-- <div class="widget Text">
					    <h3 class="widget-title widget-title ">This month only!</h3>
					    <h5>Free UK shipping!</h5>
					    <h6><i class="fa fa-gift"> &nbsp; </i> Free gift wrap</h6>
					
					    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque beatae tempore porro officiis!</p>
					    <a class="btn btn-primary btn-block-xs" href="#">
					        BUY NOW <em>for</em> $85
					    </a>
					</div> -->
					<!-- End class="widget Text" -->									
                    
                </aside>
                
                <!-- End sidebar -->
                
            </div>

            
            <div class="col-sm-9">
             <!--Filtering & Sort by section-->
              <div> 
                 <div class="filtering_title">
                  	<span class="filtering_titles filtering_name">Filtering  |</span>
                    <div class="filtering_sections filtering_titles"></div>
                  </div>
                    <!-- <div class="box product_name">
                        <h1><?php 
                        // echo $cat_name->category_name; 
                        ?>
                        <!--</h1>
                    </div> -->
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 products-showing">
                            	<strong class="category_name">Products for <?php echo $cat_name->category_name; ?></strong>
                                <!-- Showing <strong>12</strong> of <strong><?php echo $cat_pro_count; ?></strong> products -->
                            </div>
                            <div class="col-sm-12 col-md-6  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <!-- <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div> -->
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="products-sort-by product_sorting">
                                                <strong>Sort by</strong>
                                                <select class="sort_products" id="sort_products" name="sort-by" class="form-control">
                                                    <option value="pricel">Price - Low to High</option>
                                                    <option value="priceh">Price - High to Low</option>
                                                    <option value="name">Name </option>
                                                    <option value="newest">Newest first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
               </div>
                <!--end of filtering--> 	
           
            <!-- Products list -->
            <div id="product-list">	
				<ul class="product-list isotope">
					<?php 
					      if(!empty($product_category)): foreach($product_category as $cat_pro):
				    ?> 
				    <li class="standard" data-price="£ <?php echo $cat_pro['product_price']; ?>">
				        <a href="<?php echo base_url(); ?>detail/<?php echo $cat_pro['product_id'] ?>" title="">
				            <div class="image">
				                <img class="primary" src="<?php echo base_url().$cat_pro['product_upload_image'] ?>" alt="products by category" />
				                <img class="secondary" src="<?php echo base_url().$cat_pro['product_upload_image'] ?>" alt="products by category" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£ <?php echo $cat_pro['product_price']; ?></span>
				                </div>
				                <h3><?php echo $cat_pro['product_title']; ?></h3>
				            </div>
				
				        </a>
				    </li>
				    <!-- <li class="standard" data-price="55">
				        <a href="product.php" title="El Silencio">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_32_640xauto.jpg" alt="El Silencio" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_33_640xauto.jpg" alt="El Silencio" />
				                <span class="badge badge-sale">SALE</span>
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <del class="base">£58.00</del> 
				                    <span class="price">£57.99</span> 
				                </div>
				                <h3>El Silencio</h3>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="88">
				        <a href="product.php" title="Malta Dress">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_137_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_138_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£88.00</span>
				                </div>
				
				                <h3>Malta Dress</h3>
				
				                <div class="rating rating-5">
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                </div>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="70">
				        <a href="product.php" title="Babar Soul">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_92_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_93_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£70.00</span>
				                </div>
				                <h3>Babar Soul</h3>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="220">
				        <a href="product.php" title="Babar Afrique">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_87_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_88_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£220.00</span>
				                </div>
				                <h3>Babar Afrique</h3>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="50">
				        <a href="product.php" title="Nep Pocket Tee">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_10_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£50.00</span>
				                </div>
				                <h3>Nep Pocket Tee</h3>
				
				                <div class="rating rating-3">
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                </div>
				            </div>
				
				        </a>
				    </li>
				    <li class="featured" data-price="28">
				        <a href="product.php" title="Dustbowl Snapback">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_34_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_35_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£28.00</span>
				                </div>
				                <h3>Dustbowl Snapback</h3>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="140">
				        <a href="product.php" title="Carstensen">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_97_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_98_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£140.00</span>
				                </div>
				                <h3>Carstensen</h3>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="195">
				        <a href="product.php" title="Classic Glasgow in Silver">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_151_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_152_640xauto.jpg" alt="" />
				                <span class="badge badge-sale">SALE</span>
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <del class="base">£499.00</del> 
				                    <span class="price">£198.00</span> 
				                </div>
				                <h3>Classic Glasgow</h3>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="38">
				        <a href="product.php" title="El Paso Tank">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_122_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_123_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£38.00</span>
				                </div>
				                <h3>El Paso Tank</h3>
				
				                <div class="rating rating-4.5">
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                    <i class="fa fa-heart"></i>
				                </div>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="72">
				        <a href="product.php" title="Bay Blocker">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_39_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£72.00</span>
				                </div>
				                <h3>Bay Blocker</h3>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="58">
				        <a href="product.php" title="Marais Dress">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_42_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_43_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£58.00</span>
				                </div>
				                <h3>Marais Dress</h3>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="48">
				        <a href="product.php" title="Amelia Tote">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_44_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_45_640xauto.jpg" alt="" />
				
				                <span class="badge badge-sale">SALE</span>
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <del class="base">£58.00</del> 
				                    <span class="price">£48.00</span> 
				                </div>
				                <h3>Amelia Tote</h3>
				            </div>
				
				        </a>
				    </li>
				    <li class="standard" data-price="228">
				        <a href="product.php" title="Navy Linen Blazer">
				
				            <div class="image">
				                <img class="primary" src="../img/thumbnails/db_file_img_155_640xauto.jpg" alt="" />
				                <img class="secondary" src="../img/thumbnails/db_file_img_159_640xauto.jpg" alt="" />
				            </div>
				
				            <div class="title">
				                <div class="prices">
				                    <span class="price">£228.00</span>
				                </div>
				                <h3>Navy Linen Blazer</h3>
				            </div>
				
				        </a>
				    </li> -->
					  <?php endforeach; else: ?>
					    <p class="not_available">Product(s) not available.</p>
					  <?php endif; ?> 
					  <div class="cb"> </div>
                      			   
					</ul>
					<div class="bottom_pagination">
                           <?php echo $this->ajax_pagination->create_links(); ?> 
                       </div> 
				</div> <!--#product-list-->	
				<!-- End class="product-list isotope" -->
<?php if(!$this->input->is_ajax_request()){ ?>
				                
                <!-- "Load More" Button -->

                <!-- <button id="load_more" class="btn btn-block" data-category="16" data-rows="20" data-page="1" data-featured="true">
                    <span>Load more</span> &nbsp; <i class="fa fa-spinner fa-spin fa-lg"></i>
                </button> -->
                
                <!-- End "Load More" Button -->

            </div>
            <!--col-sm-9-->
        </div> 
        <!--row-->
    </div>
    <!--container-->

</section>
<!-- End class="category" -->
			
</section>
<!-- End class="main" -->
			
<?php include "templates/footer.php"; ?>
<?php } ?>