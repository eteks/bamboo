<?php
include "templates/header.php";
?>
<div class="col-md-3 visible-lg"></div>
</div>

</div>
</nav>
<!-- End class="navigation" -->

<!-- Content section -->
<section class="main">

	<!-- Home content -->
	<section class="home">

		<!-- Slider -->
		<section class="flexslider">
			<ul class="slides">
				<li>
					<img src="<?php echo base_url(); ?>img/slides/1.jpg" alt="" />
					<div class="caption">
						<div class="container">
							<div class="col-md-6">
								<h3>Latest Collection Launched</h3>
								<br />
								<p>
									Best Of Bamboo
								</p>
								<!-- <br /> <a class="btn btn-sm" title="" href="/retina-ready-icons">Find out more</a>
								<a class="btn btn-primary btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">
								Buy now &nbsp; <em class="fa fa-chevron-right"></em>
								</a> -->
							</div>
						</div>
					</div>
				</li>
				<li>
					<img src="<?php echo base_url(); ?>img/slides/2.jpg" alt="" />
					<div class="caption">
						<div class="container">
							<div class="col-md-6">
								<h3>Be a Trendsetter</h3>
								<br />
								<p>
									New Arrivals
								</p>
								<!--  <br /> <a class="btn btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">Find out more</a>
								<a class="btn btn-primary btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">
								Buy now &nbsp; <em class="fa fa-chevron-right"></em>
								</a> -->
							</div>
						</div>
					</div>
				</li>
				<li>
					<img src="<?php echo base_url(); ?>img/slides/3.jpg" alt="" />
					<div class="caption">
						<div class="container">
							<div class="col-md-6 col-md-offset-6 text-right">
								<h3>Fashion's Favourite</h3>
								<br />
								<p>
									Only On Bamboo
								</p>
								<!-- <br /> <a class="btn btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">Find out more</a>
								<a class="btn btn-primary btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">
								Buy now &nbsp; <em class="fa fa-chevron-right"></em>
								</a> -->
							</div>
						</div>
					</div>
				</li>
				<li>
					<img src="<?php echo base_url(); ?>img/slides/4.jpg" alt="" />
					<div class="caption">
						<div class="container">
							<div class="col-md-6 col-md-offset-6 text-right">
								<h3>Let the Festivities Begin</h3>
								<br />
								<p>
									Upto 80% Off
								</p>
								<!--  <br /> <a class="btn btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">Find out more</a>
								<a class="btn btn-primary btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">
								Buy now &nbsp; <em class="fa fa-chevron-right"></em>
								</a> -->
							</div>
						</div>
					</div>
				</li>
			</ul>
		</section>
		<!-- End class="flexslider" -->
		<!-- Promos -->
		<section class="promos">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="free-shipping">
							<div class="box border-top">
								<img src="<?php echo base_url(); ?>img/free-shipping.png" alt="" />
								<div class="hgroup title">
									<h3>Free shipping!</h3>
									<h5>This is a snappy sub-title</h5>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque beatae tempore porro officiis!
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="world-shipping">
							<div class="box border-top">
								<img src="<?php echo base_url(); ?>img/world-shipping.png" alt="" />
								<div class="hgroup title">
									<h3>We're now global!</h3>
									<h5>This is a snappy sub-title</h5>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque beatae tempore porro officiis!
								</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="low-price">
							<div class="box border-top">
								<img src="<?php echo base_url(); ?>img/low-price.png" alt="" />
								<div class="hgroup title">
									<h3>Lowest price guarantee!</h3>
									<h5>This is a snappy sub-title</h5>
								</div>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque beatae tempore porro officiis!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End class="promos" -->

		<section class="featured">
			<div class="container">

				<div class="row">
					<div class="col-sm-9">
						<!-- Products list -->
					  
						<ul class="product-list isotope">
						  <?php foreach ($giftstore_product as $pro): ?>	
							<li class="standard" data-price="58">
								<a href="product.php" title="Lisette Dress">
								<div class="image">
									<img class="primary" src="<?php echo base_url().$pro['product_upload_image'] ?>" alt="Lisette Dress" />
									<img class="secondary" src="<?php echo base_url().$pro['product_upload_image'] ?>" alt="Lisette Dress" />
								</div>
								<div class="title">
									<div class="prices">
										<span class="price"><?php echo $pro['product_price'] ?></span>
									</div>
									<h3><?php echo $pro['product_title'] ?></h3>
								</div> </a>
							</li>
							<!-- <li class="standard" data-price="55">
								<a href="product.php" title="El Silencio">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_32_640xauto.jpg" alt="El Silencio" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_33_640xauto.jpg" alt="El Silencio" />
									<span class="badge badge-sale">SALE</span>
								</div>
								<div class="title">
									<div class="prices">
										<del class="base">£58.00</del>
										<span class="price">£57.99</span>
									</div>
									<h3>El Silencio</h3>
								</div> </a>
							</li>
							<li class="standard" data-price="88">
								<a href="product.php" title="Malta Dress">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_137_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_138_640xauto.jpg" alt="" />
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
								</div> </a>
							</li>
							<li class="standard" data-price="70">
								<a href="product.php" title="Babar Soul">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_92_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_93_640xauto.jpg" alt="" />
								</div>
								<div class="title">
									<div class="prices">
										<span class="price">£70.00</span>
									</div>
									<h3>Babar Soul</h3>
								</div> </a>
							</li>
							<li class="standard" data-price="220">
								<a href="product.php" title="Babar Afrique">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_87_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_88_640xauto.jpg" alt="" />
								</div>
								<div class="title">
									<div class="prices">
										<span class="price">£220.00</span>
									</div>
									<h3>Babar Afrique</h3>
								</div> </a>
							</li>
							<li class="standard" data-price="50">
								<a href="product.php" title="Nep Pocket Tee">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_10_640xauto.jpg" alt="" />
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
								</div> </a>
							</li>
							<li class="featured" data-price="28">
								<a href="product.php" title="Dustbowl Snapback">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_34_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_35_640xauto.jpg" alt="" />
								</div>
								<div class="title">
									<div class="prices">
										<span class="price">£28.00</span>
									</div>
									<h3>Dustbowl Snapback</h3>
								</div> </a>
							</li>
							<li class="standard" data-price="140">
								<a href="product.php" title="Carstensen">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_97_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_98_640xauto.jpg" alt="" />
								</div>
								<div class="title">
									<div class="prices">
										<span class="price">£140.00</span>
									</div>
									<h3>Carstensen</h3>
								</div> </a>
							</li>
							<li class="standard" data-price="195">
								<a href="product.php" title="Classic Glasgow in Silver">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_151_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_152_640xauto.jpg" alt="" />
									<span class="badge badge-sale">SALE</span>
								</div>
								<div class="title">
									<div class="prices">
										<del class="base">£499.00</del>
										<span class="price">£198.00</span>
									</div>
									<h3>Classic Glasgow</h3>
								</div> </a>
							</li>
							<li class="standard" data-price="38">
								<a href="product.php" title="El Paso Tank">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_122_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_123_640xauto.jpg" alt="" />
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
								</div> </a>
							</li>
							<li class="standard" data-price="72">
								<a href="product.php" title="Bay Blocker">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_39_640xauto.jpg" alt="" />
								</div>
								<div class="title">
									<div class="prices">
										<span class="price">£72.00</span>
									</div>
									<h3>Bay Blocker</h3>
								</div> </a>
							</li>
							<li class="standard" data-price="58">
								<a href="product.php" title="Marais Dress">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_42_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_43_640xauto.jpg" alt="" />
								</div>
								<div class="title">
									<div class="prices">
										<span class="price">£58.00</span>
									</div>
									<h3>Marais Dress</h3>
								</div> </a>
							</li>
							<li class="standard" data-price="48">
								<a href="product.php" title="Amelia Tote">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_44_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_45_640xauto.jpg" alt="" />

									<span class="badge badge-sale">SALE</span>
								</div>
								<div class="title">
									<div class="prices">
										<del class="base">£58.00</del>
										<span class="price">£48.00</span>
									</div>
									<h3>Amelia Tote</h3>
								</div> </a>
							</li>
							<li class="standard" data-price="228">
								<a href="product.php" title="Navy Linen Blazer">
								<div class="image">
									<img class="primary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_155_640xauto.jpg" alt="" />
									<img class="secondary" src="<?php echo base_url(); ?>img/thumbnails/db_file_img_159_640xauto.jpg" alt="" />
								</div>
								<div class="title">
									<div class="prices">
										<span class="price">£228.00</span>
									</div>
									<h3>Navy Linen Blazer</h3>
								</div> </a>
							</li> -->
						 <?php endforeach ?>
						</ul>
						
						<!-- End class="product-list isotope" -->
					</div>
					
					<div class="col-sm-3">
						<!-- Categories widget -->
						<div class="widget Categories">
							<h3 class="widget-title widget-title ">Categories</h3>
							<ul>
								<?php foreach ($giftstore_category as $categories) { ?>
								<li>
									<a href='category.php' class="title"><?php echo $categories['category_name']; ?></a>
								</li>
								<?php } ?>
								
								
							</ul>
						</div>
						<!-- End class="widget Categories" -->

						<!-- This month only! widget -->
						<div class="widget Text">
							<h3 class="widget-title widget-title ">This month only!</h3>
							<h5>Free UK shipping!</h5>
							<h6><i class="fa fa-gift"> &nbsp; </i> Free gift wrap</h6>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque beatae tempore porro officiis!
							</p>
							<a class="btn btn-primary btn-block-xs" href="#"> BUY NOW <em>for</em> $85 </a>
						</div>
						<!-- End class="widget Text" -->

					</div>
				</div>

			</div>
		</section>

	</section>
	<!-- End class="home" -->

</section>
<!-- End class="main" -->
<?php
include "templates/footer.php";
?>
