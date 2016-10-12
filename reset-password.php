<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Reset Password</a>
                    </li>
                </ul>
                
            </div>
        </div>        
    
    </div>
</nav>
<!-- End class="navigation" -->

			
			<!-- Content section -->	
			<section class="main">
			
				

<!-- Reset password -->
<section class="reset_password">


    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form onsubmit="return false" enctype="multipart/form-data" action="#" method="post">

                    <div class="box">
                        <div class="hgroup title">
                            <h3>Forgotten your password?</h3>
                            <h5>Don't worry! Enter your email address below and we'll reset it for you.</h5>
                        </div>

                        <div class="box-content">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="control-group">
                                        <label class="control-label" for="email">Email</label>
                                        <div class="controls">
                                            <input type="text" class="form-control" id="email" name="email" value="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="buttons">
                            <button class="btn btn-primary btn-sm btn-block-xs" type="submit" name="password_restore" value="Submit">
                                Reset my password
                            </button>                                            
                        </div>
                    </div>
                </form>		
            </div>
        </div>
    </div>	
</section>                
<!-- End Reset password -->
			
			</section>
			<!-- End class="main" -->
			
<?php include "templates/footer.php"; ?>