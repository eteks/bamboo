<?php include "templates/header.php"; ?>
            <div class="col-md-3 visible-lg">
            	
                <ul class="breadcrumb pull-right">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">
                        <a href="#">Checkout Start</a>
                    </li>
                </ul>
                
            </div>
        </div>        
    
    </div>
</nav>
<!-- End class="navigation" -->

			
			<!-- Content section -->	
			<section class="main">
			
				

<!-- Checkout Start -->
<section class="checkout_start">


    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <!-- Login -->
<div class="login">
    <div class="box">
        <form onsubmit="return false;" enctype="multipart/form-data" action="#" method="post">

            <div class="hgroup title">
                <h3>Customer login</h3>
                <h5>Please login using your existing account</h5>
            </div>

            <div class="box-content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="control-label" for="login_email">Email</label>
                            <div class="controls">
                                <input class="form-control" id="login_email" type="text" name="email" value="" />
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">	
                        <div class="form-group">					
                            <label class="control-label" for="login_password">Password</label>
                            <div class="controls">
                                <input class="form-control" id="login_password" type="password" name="password" />
                            </div>
                        </div>
                    </div>
                </div>	
            </div>

            <div class="buttons">
                <button type="submit" class="btn btn-primary btn-sm btn-block-xs" name="login" value="Login">
                    Login
                </button>
                <a href="reset-password.php" class="btn btn-sm btn-block-xs">
                    Reset my password
                </a>
            </div>		           
        </form>		
    </div>
</div>
<!-- End class="login" -->
            </div>

            <div class="col-sm-6">
                <!-- Register -->
<div class="register">
    <div class="box">
        <div class="hgroup title">
            <h3>Want to Register?</h3>
            <h5>Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website. You'll also be able to track your orders with ease!</h5>
        </div>

        <div class="buttons">
            <a href="#" class="btn btn-sm btn-block-xs" data-toggle="modal" data-target="#register">
                Register now &nbsp; <i class="fa fa-chevron-right"></i>
            </a>
        </div>
    </div>
</div>
<!-- End class="register" -->

                <!-- Checkout as Guest -->
                <div class="guest">
                    <div class="box">
                        <div class="hgroup title">
                            <h3>Checkout as Guest</h3>
                            <h5>Don't have an account and you don't want to register? Checkout as a guest instead!</h5>
                        </div>

                        <div class="buttons">
                            <a class="btn btn-sm btn-block-xs" href="checkout.php">
                                Checkout as guest &nbsp; <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End class="guest" -->
                
            </div>	
        </div>
    </div>

    <!-- Register modal window -->
<div id="register" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

		    <form onsubmit="return false;" enctype="multipart/form-data" action="#" method="post">
		
		        <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		            <div class="hgroup title">
		                <h3>Register now</h3>
		                <h5>Registered users get access to features such as order history and so much more!</h5>
		            </div>
		        </div>
		
		        <div class="modal-body">
		
		            <div class="row">
		                <div class="col-sm-6">
		                    <div class="form-group">
		                        <label class="control-label" for="first_name">First name</label>
		                        <div class="controls">
		                            <input type="text" class="form-control" id="first_name" name="first_name" value="" />
		                        </div>
		                    </div>
		                </div>
		
		                <div class="col-sm-6">
		                    <div class="form-group">
		                        <label class="control-label" for="last_name">Last name</label>
		                        <div class="controls">
		                            <input type="text" class="form-control" id="last_name" name="last_name" value="" />
		                        </div>
		                    </div>
		                </div>
		            </div>
		
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="form-group">
		                        <label class="control-label" for="email">Email address</label>
		                        <div class="controls">
		                            <input type="text" class="form-control" id="email" name="email" value="" />
		                        </div>
		                    </div>
		                </div>
		            </div>
		
		            <div class="row">	
		                <div class="col-sm-6">
		                    <div class="form-group">
		                        <label class="control-label" for="password">Password</label>
		                        <div class="controls">
		                            <input class="col-sm-12" type="password" id="password"  name="password" autocomplete="off" />
		                        </div>
		                    </div>
		                </div>
		
		                <div class="col-sm-6">
		                    <div class="form-group">
		                        <label class="control-label" for="password_confirm">Password confirm</label>
		                        <div class="controls">
		                            <input class="col-sm-12" type="password" id="password_confirm"  name="password_confirm" autocomplete="off" />
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		
		        <div class="modal-footer">
		            <button type="submit" class="btn btn-primary btn-sm" name="signup" value="Register">
		                Register now &nbsp; <i class="fa fa-check"></i>
		            </button>
		        </div>                           
		
		    </form>
    
    	</div>
    </div>
</div>
<!-- End Register modal window --> 
    
</section>
<!-- End class="checkout_start" -->
			
			</section>
			<!-- End class="main" -->
<?php include "templates/footer.php"; ?>			
