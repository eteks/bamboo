<?php include "templates/header.php"; ?>
           <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Search</a>
                    </li>
                </ul>
                
            </div>
        </div>        
    
    </div>
</nav>
<!-- End class="navigation" -->

			
			<!-- Content section -->	
			<section class="main">
			
				

<!-- Search results -->
<section class="search-results">


    <div class="container">
        <div class="row">
            
            <div class="col-sm-3">
                
                <!-- Search box -->
                <form method="get" action="#">

                    <div class="box border-top">
                        <div class="hgroup title">
                            <h3>Search results for "keyword"</h3>
                            <h5>Products found: 14</h5>
                        </div>

                        <div class="box-content">


                            <div class="filter filter-search">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Search</label>
                                            <div class="controls">
                                                <input type="text" name="query" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="small" />

                            <div class="filter filter-categories">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Categories</label>
                                            <div class="controls">
                                                <select name="categories[]" class="form-control">
                                                    <option value="">All categories</option>
                                                    <option value="1" >Mens</option>
                                                    <option value="2" >Womens</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="small" />

                            <div class="filter filter-manufacturers">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="control-label">Manufacturers</label>
                                            <div class="controls">
                                                <select name="manufacturers[]" class="form-control">
                                                    <option value="">All manufacturers</option>
                                                    <option value="14" >Cameo</option>
                                                    <option value="8" >Citizens Of Humanity</option>
                                                    <option value="1" >Farm Tactics</option>
                                                    <option value="15" >Free People</option>
                                                    <option value="11" >Gitman Brothers Vintage</option>
                                                    <option value="2" >Howlin By Morrison</option>
                                                    <option value="5" >New Balance</option>
                                                    <option value="12" >Obey</option>
                                                    <option value="13" >Oliver Newton</option>
                                                    <option value="6" >Quality Peoples</option>
                                                    <option value="7" >RVCA</option>
                                                    <option value="3" >S.N.S. Herning</option>
                                                    <option value="9" >Soulland</option>
                                                    <option value="4" >Wings+Horns</option>
                                                    <option value="10" >Wolf vs. Goat</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <hr class="small" />

                            <div class="filter filter-price">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Min price</label>
                                            <div class="controls">
                                                <input type="text" value="" name="min_price" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="control-label">Max price</label>
                                            <div class="controls">
                                                <input type="text" value="" name="max_price" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="buttons">
                            <button class="btn btn-primary btn-block-xs">
                                Refine search
                            </button>
                        </div>
                    </div>
                </form>
                
                <!-- End search box -->
                
            </div>

            <div class="col-sm-9">
                <!-- Products list -->
<ul class="product-list isotope">
    <li class="standard" data-price="58">
        <a href="product.php" title="Lisette Dress">
            <div class="image">
                <img class="primary" src="img/thumbnails/db_file_img_48_640xauto.jpg" alt="Lisette Dress" />
                <img class="secondary" src="img/thumbnails/db_file_img_49_640xauto.jpg" alt="Lisette Dress" />
            </div>

            <div class="title">
                <div class="prices">
                    <span class="price">£58.00</span>
                </div>
                <h3>Lisette Dress</h3>
            </div>

        </a>
    </li>
    <li class="standard" data-price="55">
        <a href="product.php" title="El Silencio">

            <div class="image">
                <img class="primary" src="img/thumbnails/db_file_img_32_640xauto.jpg" alt="El Silencio" />
                <img class="secondary" src="img/thumbnails/db_file_img_33_640xauto.jpg" alt="El Silencio" />
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
                <img class="primary" src="img/thumbnails/db_file_img_137_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_138_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_92_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_93_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_87_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_88_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_10_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_34_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_35_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_97_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_98_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_151_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_152_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_122_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_123_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_39_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_42_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_43_640xauto.jpg" alt="" />
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
                <img class="primary" src="img/thumbnails/db_file_img_44_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_45_640xauto.jpg" alt="" />

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
                <img class="primary" src="img/thumbnails/db_file_img_155_640xauto.jpg" alt="" />
                <img class="secondary" src="img/thumbnails/db_file_img_159_640xauto.jpg" alt="" />
            </div>

            <div class="title">
                <div class="prices">
                    <span class="price">£228.00</span>
                </div>
                <h3>Navy Linen Blazer</h3>
            </div>

        </a>
    </li>
</ul>
<!-- End class="product-list isotope" -->         
            </div>

        </div>	
    </div>	
</section>


<!-- End class="category" -->
			
			</section>
			<!-- End class="main" -->
			
<?php include "templates/footer.php"; ?>